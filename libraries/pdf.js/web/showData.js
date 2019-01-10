//global variable for selection reactagle area
var currentSelectionRects = null;
//used in to generate REST endpoint url i.e. ajax request url 

var href = location.href; //returns the entire url
var arrurl = href.split("/");
//if(arrurl[3]!='node' || arrurl[3]!='media') var roots_subfolder = arrurl[3]+'/';
//else var roots_subfolder = '';

var roots_subfolder = '';

//get csrf token for rest session and set cookie for it
getCSRFtoken();

//function get called on annotation button click
function getAnnotationCoords(event) {    
     // if text selected


    if(window.getSelection().rangeCount > 0 ){

    if(window.getSelection().getRangeAt(0)!='') {
     document.getElementById("commentInput").focus();
    // set global variable for selection
    currentSelectionRects=RangeFix.getClientRects(window.getSelection().getRangeAt(0));  
    var annotationbar = document.getElementById("annotateBar");
    // annotation bar show or hide
    if(annotationbar.classList.contains("hidden"))
    {
      annotationbar.classList.remove('hidden');
      document.getElementById("findbar").classList.add('hidden');
      document.getElementById("bookmarkBar").classList.add('hidden');
      document.getElementById("annotate").classList.add('toggled');          
    }
    else
    {
      annotationbar.classList.add('hidden');
      document.getElementById("annotate").classList.remove('toggled');
    }
   }
  
   else{    
    showMessage("Please Select Text to Annotate --",'error');
   }
  }
  else{    
    showMessage("Please Select Text to Annotate",'error');
  }
    
}

//function get called on save buttom from annotation bar clicked
function saveAnnotaion() {
    var annotationcomment = document.getElementById("commentInput");
    var typex = 'annotation';
    if(annotationcomment.value.trim()!='')
      {
          //check if text is selected or not
          if(window.getSelection().rangeCount > 0 || currentSelectionRects){ 
            if(currentSelectionRects) var selectionRects = currentSelectionRects;
            else var selectionRects=RangeFix.getClientRects(window.getSelection().getRangeAt(0));
            showHighlight(getHightlightCoords(selectionRects,typex));
          }
          else{                
                showMessage("Please Select Text to Annotate",'error');
          }
      }
      else {
            annotationcomment.focus();     
      }
}

//function get called on Bookmark button click
function showBookmarkBar(event) {
    document.getElementById("titleInput").focus();      
    var bookmarkbar = document.getElementById("bookmarkBar");
    // annotation bar show or hide
    if(bookmarkbar.classList.contains("hidden"))
    {
      bookmarkbar.classList.remove('hidden');
      document.getElementById("findbar").classList.add('hidden');
      document.getElementById("annotateBar").classList.add('hidden');
      document.getElementById("bookmark").classList.add('toggled');
    }
    else
    {
      bookmarkbar.classList.add('hidden');
      document.getElementById("bookmark").classList.remove('toggled');
    }  
}

//function get called on Bookmark button click
function hideBookmarkBar() { 
      var bookmarkbar = document.getElementById("bookmarkBar"); 
      bookmarkbar.classList.add('hidden');
      document.getElementById("bookmark").classList.remove('toggled');    
}

//function get called on Bookmark button click
function hideAnnotaionBar() {
      var annotationbar = document.getElementById("annotateBar");
      annotationbar.classList.add('hidden');
      document.getElementById("annotate").classList.remove('toggled');
}

//function get called on save buttom from annotation bar clicked
function saveBookmark() {
    var titlecomment = document.getElementById("titleInput"); 
    if(titlecomment.value.trim()!='')
         setBookmark();
    else {
         titlecomment.focus();     
    }
}

//function get called on Highlight Clicked
function saveHighlight()
{   
    var typex = 'highlight';

    //check if text is selected or not
    if(window.getSelection().rangeCount > 0 ){ 
         if(window.getSelection().getRangeAt(0)!='') {
          var selectionRects=RangeFix.getClientRects(window.getSelection().getRangeAt(0));
          showHighlight(getHightlightCoords(selectionRects,typex));
        }
        else{
        showMessage("Please Select Text to Highlight",'error');
    } 
    }
    else{
        showMessage("Please Select Text to Highlight..",'error');
    }    
}

function getHightlightCoords(selectionRects,typex) {

    var pageIndex = window.PDFViewerApplication.pdfViewer.currentPageNumber - 1;
    var page = window.PDFViewerApplication.pdfViewer._pages[pageIndex];
    var pageRect = page.canvas.getClientRects()[0]; 
    var viewport = page.viewport;
    var selected = _.map(selectionRects, function (r) {
        return viewport.convertToPdfPoint(r.left - pageRect.left, r.top - pageRect.top).concat(
            viewport.convertToPdfPoint(r.right - pageRect.left, r.bottom - pageRect.top));
    })
    var colorcode=document.getElementById('colorPicker').value;
    var commentstring=document.getElementById('commentInput').value;
    var trackidint='';
    

    // format selection array from coordinates 
    var uniqueArray=[]
     for(var i=0;i<selected.length;i++){
       if(uniqueArray.length===0){
           uniqueArray.push(selected[i]);
       }
       else{       
           for(var a=0;a<uniqueArray.length;a++){         
                 if((Math.abs(Math.round(uniqueArray[a][0])-Math.round(selected[i][0]))<=1) && (Math.abs(Math.round(uniqueArray[a][1])-Math.round(selected[i][1]))<=1) && (Math.abs(Math.round(uniqueArray[a][2])-Math.round(selected[i][2]))<=1) && (Math.abs(Math.round(uniqueArray[a][3])-Math.round(selected[i][3]))<=1)){
                 break;
                 }
                 if(a+1 == uniqueArray.length){
                 uniqueArray.push(selected[i]);
                 }
           }
       }
     }     

        var highlight_array = JSON.stringify(uniqueArray);
        var CSRFToken = getCookie('X-CSRF-Token');
        var annodata = JSON.stringify({
          "user_id": PDFJS.userId,
          "document_id": PDFJS.documentId,
          "page_index": pageIndex,
          "track_type": typex,
          "highlight_array": highlight_array,
          "message": commentstring,
          "color": colorcode
        });

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function () {
          if (this.readyState === 4 && this.status == 200) {            
            var result = JSON.parse(this.responseText);           
            getTrackList();
            showMessage(jsUcfirst(typex) + " Saved",'');         
            document.getElementById("annotateBar").classList.add('hidden');
            document.getElementById("bookmarkBar").classList.add('toggled');
            document.getElementById("annotate").classList.remove('toggled');
            document.getElementById("bookmark").classList.remove('toggled');
            console.log(this.responseText);
          }
          else if (this.status == 403){
            showMessage("Please register or login before adding "+typex,'error');
            console.log(this.responseText);
          }
          else {
          //  showMessage("Not Saved",'error');
            console.log(this.responseText);
          }
        });

        xhr.open("POST", "/"+roots_subfolder+"api/pdf/annotations");
        xhr.setRequestHeader("content-type", "application/json");
        xhr.setRequestHeader("cache-control", "no-cache");
        xhr.setRequestHeader("X-CSRF-Token", CSRFToken);  
        xhr.send(annodata);        

       return { page: pageIndex, coords: uniqueArray, color:colorcode, comment:commentstring, trackid: trackidint };
} //function

//highlights the selected div with given color
function showHighlight(selected) {
    if(selected){
    var pageIndex = selected.page;
    var page = window.PDFViewerApplication.pdfViewer._pages[pageIndex];
	  //var pageElement = page.canvas.parentElement;
	  var pageElement = page.canvas.parentNode.nextSibling;
    var viewport = page.viewport;
    var color = selected.color;   
    var trackid = selected.trackid;
    var comment = selected.comment.trim();
    var symbolflag = true;
    var topcordx = 0;    
        selected.coords.forEach(function (rect) {
        var bounds = viewport.convertToViewportRectangle(rect);
        var el = document.createElement('div');
        var topcord = Math.min(bounds[1], bounds[3]) - 1;

        if(symbolflag){
          symbolflag = false;
          var commenttop = Math.abs(bounds[1] - bounds[3]);
          topcordx = topcord - (commenttop*1.3);          
        }
        el.setAttribute('style', 'cursor:pointer;position: absolute; border:none; background-color:'+color+';' +
            'left:' + Math.min(bounds[0], bounds[2]) + 'px; top:' + topcord + 'px;' +
            'width:' + Math.abs(bounds[0] - bounds[2]) + 'px; height:' + Math.abs(bounds[1] - bounds[3]) + 'px;z-index:100000;');
        el.setAttribute('title', comment);       
        pageElement.appendChild(el);
    })
       if(comment !='') {
        var e2 = document.createElement('img');
        e2.setAttribute('style', 'width:calc(100% - 96%);cursor:pointer;opacity:1;left:2px;position: absolute; top:' + topcordx + 'px;z-index:100000;');      
        e2.setAttribute('src', 'images/comment_redx.png');
        e2.setAttribute('onClick', "showComment('"+encodeURIComponent(comment)+"',this)");
       // e2.setAttribute('onmouseout', "hideComment()");        
        pageElement.appendChild(e2);
      }
  }
}

function setBookmark()
{
  var pageIndex = window.PDFViewerApplication.pdfViewer.currentPageNumber - 1;
  var commentstring=document.getElementById('titleInput').value;
  var CSRFToken = getCookie('X-CSRF-Token');; 
  var annodata = JSON.stringify({
          "user_id": PDFJS.userId,
          "document_id": PDFJS.documentId,
          "page_index": pageIndex,
          "track_type": "bookmark",    
          "message": commentstring,          
        });
  if(CSRFToken){
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
      if(this.readyState === 4 && this.status == 200){            
        console.log(this.responseText);
        document.getElementById("bookmarkBar").classList.add('hidden');            
        getTrackList();
        showMessage("Bookmark Saved",''); 
      }
      else if (this.status == 403){
        showMessage('Please register or login before adding bookmark','error');
        console.log(this.responseText);
      }
      else {
      //  showMessage("Not Saved",'error');
        console.log(this.responseText);
      }            
    });

    xhr.open("POST", "/"+roots_subfolder+"api/pdf/annotations");
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("cache-control", "no-cache");
    xhr.setRequestHeader("X-CSRF-Token", CSRFToken);  
    xhr.send(annodata);
  }
}

function getCSRFtoken()
{
  var xhr = new XMLHttpRequest();
  xhr.withCredentials = true;

  xhr.addEventListener("readystatechange", function () {
    if (this.readyState === 4) {      
      document.cookie = "X-CSRF-Token="+this.responseText; 
    }   
  });

  xhr.open("GET", "/"+roots_subfolder+"rest/session/token");
  xhr.setRequestHeader("cache-control", "no-cache");
  xhr.send();
}

function getCookie(c_name) {
  if(document.cookie.length > 0) {
    c_start = document.cookie.indexOf(c_name + "=");
        if(c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if(c_end == -1) c_end = document.cookie.length;
            return unescape(document.cookie.substring(c_start,c_end));
        }
  }
  return "";
}

function gotoPage(page_index){
  PDFViewerApplication.pdfViewer.currentPageNumber = page_index;
}

function showMessage(msg,flag){
  document.getElementById("messageBar").classList.remove('hidden');
   if(flag == 'error'){
     var msgHTML = '<span><i>'+msg+'</i></span>';
     document.getElementById("messageBar").classList.add('errorcontent');
     document.getElementById("messageBar").classList.remove('successcontent');
     document.getElementById("messageBar").classList.remove('nocontent');     
   }
   else{
     var msgHTML = '<span><i>'+msg+'</i></span>';
     document.getElementById("messageBar").classList.add('successcontent');
      document.getElementById("messageBar").classList.remove('errorcontent');
     document.getElementById("messageBar").classList.remove('nocontent');
   }
  document.getElementById("messageBarLabel").innerHTML=msgHTML;
  window.setTimeout(hideMessage,5000);
}

function hideMessage(){
  document.getElementById("messageBar").classList.add('nocontent');
  document.getElementById("messageBar").classList.remove('errorcontent');
  document.getElementById("messageBar").classList.remove('successcontent');
  document.getElementById("messageBar").classList.add('hidden');
  document.getElementById("messageBarLabel").innerHTML='';
}

function showComment(msg,element){
  // x = e.pageX;
  //y = e.pageY;
  var rect = element.getBoundingClientRect();
  //alert(rect.top+" "+rect.right+" "+rect.bottom+" "+rect.left);

  document.getElementById("commentBar").style.top=(rect.bottom-5)+'px';
  document.getElementById("commentBar").style.left=(rect.left-10)+'px';
  document.getElementById("commentBarLabel").innerHTML=decodeURIComponent(msg);
  document.getElementById("commentBar").classList.remove('hidden');
 // document.getElementById("commentBar").focus();
  document.getElementById("cover").style.display = 'block';

}

function hideComment(){
  document.getElementById("commentBar").classList.add('hidden');
  document.getElementById("commentBarLabel").innerHTML='';
  document.getElementById("cover").style.display = 'none';
}

function jsUcfirst(string){
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function getTrackList()
{
  var xhr = new XMLHttpRequest();
  xhr.withCredentials = true;
  var ajaxurlnew=  "/"+roots_subfolder+"api/pdf/annotations/"+PDFJS.userId+"/"+PDFJS.documentId+"/all";
  xhr.addEventListener("readystatechange", function () {
    if(this.readyState === 4 && this.status == 200) {
      var result = JSON.parse(this.responseText);              
      var annotation_str = '';
      var bookmark_str = '';
        for (var key in result.data) {
          var pageNo = parseInt(result.data[key]['page_index'])+1;
            if(result.data[key]['track_type'] == 'annotation' && result.data[key]['message'].trim()!='')
              {
                annotation_str += '<div class="outlineItem"><a onClick="gotoPage('+pageNo+')">'+result.data[key]['message'].substring(0, 100)+'</a></div>';
              }

            if(result.data[key]['track_type'] == 'bookmark' && result.data[key]['message']!='')
              {
                bookmark_str += '<div class="outlineItem"><a onClick="gotoPage('+pageNo+')">'+result.data[key]['message'].substring(0, 30)+'</a></div>';
              }
            bookmarkView.innerHTML=bookmark_str;
            annotationView.innerHTML=annotation_str;
        }
    }
    else {             
            console.log(this.responseText);
    }              
  });

    xhr.open("GET", ajaxurlnew);
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("cache-control", "no-cache");
    xhr.send();
}

function setResumedPage()
{
   var xhr = new XMLHttpRequest();
   xhr.withCredentials = true;
   var ajaxurlnew=  "/"+roots_subfolder+"api/pdf/resume/"+PDFJS.userId+"/"+PDFJS.documentId;    
    xhr.addEventListener("readystatechange", function () {
      if (this.readyState === 4 && this.status == 200) { 
         var result = JSON.parse(this.responseText);       
         PDFViewerApplication.pdfViewer.currentPageNumber = parseInt(result.data[0]['page_index']);                                     
        }
      else {             
            console.log(this.responseText);
        }       
    });
    xhr.open("GET", ajaxurlnew);
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("cache-control", "no-cache");
    xhr.send();
}

function renderAnnotationsHighlights(pageIndex)
{
    var ajaxurl =  "/"+roots_subfolder+"api/pdf/annotations/"+PDFJS.userId+"/"+PDFJS.documentId+"/"+pageIndex+"/all";
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function () {
      if (this.readyState === 4 && this.status == 200) {        
         var result = JSON.parse(this.responseText);          
            for (var key in result.data)
            {
              if(result.data[key]['highlight_array'])
               {                
                var coordsarray = JSON.parse(result.data[key]['highlight_array']);
                var colorhex = result.data[key]['color'];
                var commentstring = result.data[key]['message'];
                var trackidint = result.data[key]['track_id'];
                var annotobj = {page: pageIndex, coords: coordsarray, color: colorhex, comment: commentstring, trackid: trackidint };               
                showHighlight(annotobj);
               }        
            }   
      }
      else {             
            console.log(this.responseText);
      } 
    });

    xhr.open("GET", ajaxurl);
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("cache-control", "no-cache");
    xhr.send();
}
