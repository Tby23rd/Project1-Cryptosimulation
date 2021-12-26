function correctPNG()
{
   for(var i=0; i<document.images.length; i++)
   {
   var img = document.images[i]
   var imgName = img.src.toUpperCase()
   if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
   {
   var imgID = (img.id) ? "id='" + img.id + "' " : ""
   var imgClass = (img.className) ? "class='" + img.className + "' " : ""
   var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
   var imgstyle = "display:inline-block;" + img.style.cssText
   if (img.align == "left") imgstyle = "float:left;" + imgstyle
   if (img.align == "right") imgstyle = "float:right;" + imgstyle
   if (img.parentElement.href) imgstyle = "cursor:hand;" + imgstyle 
   var strNewHTML = "<span " + imgID + imgClass + imgTitle
   + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgstyle + ";"
   + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
   + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
   img.outerHTML = strNewHTML
   i = i-1
   };
   };
};

if(navigator.userAgent.indexOf("MSIE")>-1)
{
window.attachEvent("onload", correctPNG);
};
