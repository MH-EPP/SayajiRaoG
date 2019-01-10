<?php

namespace Drupal\multiple_registration\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\multiple_registration\Controller\MultipleRegistrationController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\ProxyClass\Routing\RouteBuilder;

/**
 * Class CreateRegistrationPageForm.
 *
 * @package Drupal\multiple_registration\Form
 */
class CreateRegistrationPageForm extends ConfigFormBase {

  protected $multipleRegistrationController;
  protected $cacheRender;
  protected $routeBuilder;

  /**
   * Constructs a CreateRegistrationPageForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\multiple_registration\Controller\MultipleRegistrationController $multipleRegistrationController
   *   The multiple registration controller.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cacheBackend
   *   The cacheBackend service.
   * @param \Drupal\Core\ProxyClass\Routing\RouteBuilder $routerBuilder
   *   The routerBuilder service.
   */
  public function __construct(ConfigFactoryInterface $config_factory, MultipleRegistrationController $multipleRegistrationController, CacheBackendInterface $cacheBackend, RouteBuilder $routerBuilder) {
    parent::__construct($config_factory);
    $this->multipleRegistrationController = $multipleRegistrationController;
    $this->cacheRender = $cacheBackend;
    $this->routeBuilder = $routerBuilder;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('multiple_registration.controller_service'),
      $container->get('cache.render'),
      $container->get('router.builder')
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'multiple_registration.create_registration_page_form_config',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'create_registration_page_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $rid = NULL) {
    if (!isset($rid)) {
      return FALSE;
    }
    $roles = user_role_names();
    if (!isset($roles[$rid])) {
      return FALSE;
    }
    $form['rid'] = ['#type' => 'value', '#value' => $rid];
    $config = $this->config('multiple_registration.create_registration_page_form_config');
    $form['multiple_registration_path_' . $rid] = [
      '#type' => 'textfield',
      '#title' => $this->t('Registration page path'),
      '#description' => $this->t('Path for registration page.'),
      '#default_value' => $config->get('multiple_registration_path_' . $rid),
    ];

    $form['multiple_registration_hidden_' . $rid] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Hide registration form tab'),
      '#description' => $this->t('Indicates whether form will be accessible only by url.'),
      '#default_value' => $config->get('multiple_registration_hidden_' . $rid),
    ];

    $form['multiple_registration_url_' . $rid] = [
      '#type' => 'value',
      '#value' => MultipleRegistrationController::MULTIPLE_REGISTRATION_SIGNUP_PATH_PATTERN . $rid,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $rid = $form_state->getValue('rid');
    $source = $form_state->getValue('multiple_registration_url_' . $rid);
    $alias = $form_state->getValue('multiple_registration_path_' . $rid);
    $isHidden = $form_state->getValue('multiple_registration_hidden_' . $rid);
    $this->config('multiple_registration.create_registration_page_form_config')
      ->set('multiple_registration_path_' . $rid, $alias)
      ->set('multiple_registration_url_' . $rid, $source)
      ->set('multiple_registration_hidden_' . $rid, $isHidden)
      ->save();
    $this->multipleRegistrationController->addRegisterPageAlias($source, '/' . $alias);
    $this->routeBuilder->rebuild();
    $this->cacheRender->invalidateAll();
    $form_state->setRedirect('multiple_registration.multiple_registration_list_index');
  }

}
