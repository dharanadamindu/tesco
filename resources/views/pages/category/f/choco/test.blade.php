<!DOCTYPE html>
<html>
<head>
    <title>chocolate</title>
</head>
<link rel="stylesheet" href="lib/common.css" media="screen">
<style type="text/css" media="all">@import "lib/imgNotes.css";</style>
<script type="text/javascript" src="lib/hammer.min.js"></script>
<script type="text/javascript" src="lib/js.js"></script>
<script type="text/javascript" src="lib/common.js"></script>
<script type="text/javascript" src="lib/imgViewer.js"></script>
<script type="text/javascript" src="lib/imgNotes.js"></script>

<body>
<div class="row">
    <div>
        <p>you can zoom image by scroll wheel</p>
        <div>
            <div class="row">
                <table cellspacing="0" cellpadding="0" border="0" style="width: 100%; min-width: 320px;">
                    <tr>
                        <td style="padding: 10px">
                            <div align="left">
                                <button id="toggleEdit" class="btn btn-outline-warning">Edit</button>
                                <button id="clear" class="btn btn-outline-danger">Clear</button>
                                <button id="toggleZoom" class="btn btn-outline-info">Zoom On</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td style="">
                            <div align="center">
                                <img id="image" src="choco/choco1.jpg" width="80%"/><br/>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
    <div class="col-xl-1 content-nav-wrapper">
    </div>
</div>






<script>
    !function(t){var e=[{x:"0.02",y:"0.08",note:'<center><b>CADBURY DAIRY MILK GIANT COCOLATE BUTTONS BAG PLASTIC 240 G BIG SHARE BAG</b><br/><img src="choco/cho1/1.png"/></center><center><b>$2</b><br/>'},


{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'},
{x:"",y:"",note:'<center><b></b><br/><img src="choco/cho1/.png"/></center><center><b>$</b><br/>'}];t(window).load(function(){cust_onEdit=function(e,c){var o=t(c);return t("#NoteDialog").remove(),t('<div id="NoteDialog"></div>').dialog({title:"edit sku",resizable:!1,modal:!0,height:"300",width:"450",position:{my:"left bottom",at:"right top",of:c},buttons:{Save:function(){var e=t("textarea",this).val();o.data("note").note=e,t(this).dialog("close")},Delete:function(){o.trigger("remove"),t(this).dialog("close")},Cancel:function(){t(this).dialog("close")}},open:function(){t(this).css("overflow","hidden");var e=t('<textarea id="txt" style="height:100%; width:100%;">');t(this).html(e),e.val(o.data("note").note)}})};var c=t("#image").imgNotes({onEdit:cust_onEdit}),o=c.data().wgmImgNotes;o.zimg.on("contextmenu",function(t){t.preventDefault(),o.options.onClick.call(o,t)}),o.zimg.off("tap"),c.imgNotes("import",e);var r=t("#toggleEdit");c.imgNotes("option","canEdit")?r.text("View"):r.text("Edit"),r.on("click",function(){var e=t(this);"Edit"==e.text()?(e.text("View"),c.imgNotes("option","canEdit",!0)):(e.text("Edit"),c.imgNotes("option","canEdit",!1))}),t("#clear").on("click",function(){c.imgNotes("clear")});var n=t("#toggleZoom");c.imgNotes("option","zoomable")?n.text("Zoom Off"):n.text("Zoom On"),n.on("click",function(){var e=t(this);"Zoom On"==e.text()?(e.text("Zoom Off"),c.imgNotes("option","zoomable",!0)):(e.text("Zoom On"),c.imgNotes("option","zoomable",!1))})})}(jQuery);
</script>


</body>
</html>
