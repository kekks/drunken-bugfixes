<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Demo 6.9.1
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title>Create Armani html e-mailer</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bar and preview images for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (Google App Engine, PHP, Python, Ruby on Rails, Java, etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width">
<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
<!-- Bootstrap Image Gallery styles -->
<link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">

<!-- Shim to make HTML5 elements usable in older Internet Explorer versions -->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">

</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="https://github.com/blueimp/jQuery-File-Upload">Create Armani html e-mailer</a>

        </div>
    </div>
</div>
<div class="container-fluid">
   <div class="row-fluid">
     <div class="span4 holder">
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="server/php/" method="POST" enctype="multipart/form-data">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <fieldset id="html_data" class="">
          <legend>html data</legend>
          <label class="inline">Brand
          <select name="collection">
            <option selected="selected">--------------</option>
            <option>GIORGIO ARMANI</option>
            <option>EMPORIO ARMANI</option>
            <option>ARMANI JEANS</option>
            <option>ARMANI JUNIOR</option>
            <option>ARMANI COLLEZIONI</option>
            <option>ARMANI PRIVE'</option>
            <option>ARMANI DOLCI</option>
            <option>ARMANI FIORI</option>
            <option>ARMANI CASA</option>
          </select>
          </label>
          <label class="inline">Image Link
            <input name="link" type="text" placeholder="A link image should point to">
          </label>
          <label class="inline">Include Header?
            <input type="checkbox" name="header" value="yes" checked>
          </label>
          <label class="inline">Include Footer?
            <input type="checkbox" name="footer" value="yes" checked>
          </label>
        </fieldset>

		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">




                <!-- The loading indicator is shown during file processing -->
                <div class="fileupload-loading"></div>
                <br>
                <!-- The table listing the files available for upload/download -->
                <table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>





                <button id="createHTML" class="btn btn-primary">Create HTML</button>
              </form>

              </div>
              <div class="span8">
               <!--Body content-->
               <table align="center" width="600" cellspacing="0" cellpadding="0" border="0" style="font-size:0;">
               <!-- init:ecovu -->
               <tr id="nlheader">
                <td colspan="1" height="40" align="center" class="small" style="font-size: 10px;color: #aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;"><strong>ARMANI.com</strong><br>
               If you have problems viewing this e-mail, <strong><a href="${online_version_url}$" style="font-size: 10px;color:#aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;text-decoration: underline;">click here</a></strong><br>
               </td>
               </tr>
               <!-- end:ecovu -->

               <!-- INIZIO CONTENUTO -->



               <tr><td><div id="addmap"><img id="demoreplace" src="img/invite.jpg" width="600" height="410" style="display: block; margin: 15px 0; padding:0px; border:0px;"　border="0"></div></td></tr>



               <!-- FINE CONTENUTO (CONTROLLARE COLSPAN DEL PRIMO TD E DI QUELLO CHE SEGUE) --> 
                   <tr id="nlfooter">
                     <td align="center" colspan="1"  class="small" style="font-size: 10px;color: #aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;"><a href="http://www.giorgioarmani.com/index_ibrido.jsp?language=EN&site=CUS&htmlSession=../contactServlet.jsp&audio=acceso" style="font-size: 10px;color: #aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif; text-decoration:none; font-weight:bold;">Contact Us</a> | <a href="http://www.armani.com/registration/media_en/privacy.html" style="font-size: 10px;color: #aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif; text-decoration:none; font-weight:bold;">Privacy Policy</a><br>
                       <br>
                       To ensure delivery of ARMANI.com e-mail to your inbox,<br>
                       please add <a style="font-size: 10px;color:#aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;text-decoration: underline; font-weight:bold; text-decoration:none;">newsletter@armani.com</a> to your address book<br>
                       <br>
                       You are subscribed to this e-mail as ${SMTP_ADDR}$,<br>
                       if you no longer wish to receive these messages, please <a href="http://clientsection.contactlab.it/service/unsubscribe/wfc/1920019372167/d/${encoded_user_data}$/k/${form_verification_code}$/" style="font-size: 10px;color:#aaaaaa;font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;text-decoration: underline; font-weight:bold;">click here</a><br>
                       <br></td>
                   </tr>
               </table>
               </div>
            </div>

        </div>
        <script type="text/javascript">
      	var createDEMObj = {};
      	var prec = "http://static.armanissl.com/newsletter/uploads/";
      		<?php $timestamp = time();?>
      		$(function() {
      		  var demoImg = $("#demoreplace"),
            demoHeader = $("#nlheader"),
            demoFooter = $("#nlfooter"),
            inputH = $('input[name="header"]'),
            inputF = $('input[name="footer"]');

            inputH.click(function(){
              if(!$(this).is(':checked')){ 
                demoHeader.hide();
              }else{
                demoHeader.show();
              }
            });

            inputF.click(function(){
              if(!$(this).is(':checked')){
                demoFooter.hide();
              }else{
                demoFooter.show();
              } 
            }); 

      			$('#file_upload').uploadify({
      				'formData'     : {
      					'timestamp' : '<?php echo $timestamp;?>',
      					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
      				},
      				'swf'      : 'uploadify.swf',
      				'uploader' : 'uploadify.php',
      				'onUploadComplete' : function(file) {

                         var _d = $('<img/>');
                         _d[0].src = prec+file.name;

                         _d.load(function(e){
                           demoImg.attr({src:prec+file.name}).width(this.width).height(this.height);
                           if($('input[name="link"]').val() != "") demoImg.wrap($("<a/>",{'href':$('input[name="link"]').val()}));
                           if(!$('input[name="header"]').is(':checked')) demoHeader.hide();
                           if(!$('input[name="footer"]').is(':checked')) demoFooter.hide();                      
                           createDEMObj.url = prec+file.name;
                           createDEMObj.width = this.width;
                           createDEMObj.height = this.height;
                         });
                     }
      			});

      			$("#createHTML").click(function(e){

              var l = $('input[name="link"]').val();
              createDEMObj.header = $('input[name="header"]').is(':checked');
              createDEMObj.footer = $('input[name="footer"]').is(':checked');
              if(l != "") createDEMObj.link = l;
              createDEMObj.collection = $('select[name="collection"] option:selected').val();
              window.location = "download.php?"+$.param(createDEMObj);
              createDEMObj = {};
              return false;
            });
      		});


      	</script>
      </body>
</html>