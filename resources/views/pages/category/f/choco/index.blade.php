@extends('layouts.app')



@section('content')
    <link rel="stylesheet" href="lib/common.css" media="screen">
    <style type="text/css" media="all">@import "lib/imgNotes.css";</style>
    <script type="text/javascript" src="lib/hammer.min.js"></script>
    <script type="text/javascript" src="lib/js.js"></script>
    <script type="text/javascript" src="lib/common.js"></script>
    <script type="text/javascript" src="lib/imgViewer.js"></script>
    <script type="text/javascript" src="lib/imgNotes.js"></script>


    <div class="row">
        <div class="col-xl-11 main-content pl-xl-4 pr-xl-5">
            <h1 class="page-title">template - Snack</h1>
            <p class="lead">you can zoom image by scroll wheel</p>

            <div class="example">
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
                            <td style="text-align:center; padding: 10px">
                                <p style="margin:10px 5% 10px 5%;text-align: justify;">
                                    {{--                                    by dharana--}}
                                </p>
                                <p style="margin:10px 5% 10px 5%;text-align: justify;">
                                    {{--                                    code here--}}
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td style="">
                                <h1 align="center">
                                    Chocolate prob
                                </h1>
                                <div align="center">
                                    <img id="image" src="images/choco/choco1.jpg" width="80%"/><br/>
{{--                                    <img id="image" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" width="80%"/><br/>--}}
                                </div>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>


        </div>
        <div class="col-xl-1 content-nav-wrapper">

            <ul class="nav content-nav d-flex flex-column">
                <li class="nav-item">
                    <a href="#default" class="nav-link">1</a>
                </li>
                <li class="nav-item">
                    <a href="#contents" class="nav-link">2</a>
                </li>
                <li class="nav-item">
                    <a href="#header-footer" class="nav-link">3</a>
                </li>
            </ul>


        </div>
    </div>






    <script>
        ;(function ($) {

            var notes = [
                @foreach($prob as $sku)
                {
                    x: {{$sku->x}}, y: {{$sku->y}}, note: '\
						<center><b>{{$sku->name}}</b><br/>\
						<img src="images/choco/cho1/{{$sku->sku}}.png"/></center>\
						<center><b>${{$sku->price}}</b><br/>\
						'
                },
                @endforeach
            ];

            $(window).load(function () {

                cust_onEdit = function (ev, elem) {
                    var $elem = $(elem);
                    $('#NoteDialog').remove();
                    return $('<div id="NoteDialog"></div>').dialog({
                        title: "edit sku",
                        resizable: false,
                        modal: true,
                        height: "300",
                        width: "450",
                        position: {my: "left bottom", at: "right top", of: elem},
                        buttons: {
                            "Save": function () {
                                var txt = $('textarea', this).val();
                                $elem.data("note").note = txt;
                                $(this).dialog("close");
                            },
                            "Delete": function () {
                                $elem.trigger("remove");
                                $(this).dialog("close");
                            },
                            Cancel: function () {
                                $(this).dialog("close");
                            }
                        },
                        open: function () {
                            $(this).css("overflow", "hidden");
                            var textarea = $('<textarea id="txt" style="height:100%; width:100%;">');
                            $(this).html(textarea);
                            textarea.val($elem.data("note").note);
                        }
                    });
                };

                var $img = $("#image").imgNotes({onEdit: cust_onEdit});

                var widg = $img.data().wgmImgNotes;
                widg.zimg.on('contextmenu', function (ev) {
                    ev.preventDefault();
                    widg.options.onClick.call(widg, ev);
                });
                widg.zimg.off('tap');

                $img.imgNotes("import", notes);

                var $toggle = $("#toggleEdit");
                if ($img.imgNotes("option", "canEdit")) {
                    $toggle.text("View");
                } else {
                    $toggle.text("Edit");
                }
                $toggle.on("click", function () {
                    var $this = $(this);
                    if ($this.text() == "Edit") {
                        $this.text("View");
                        $img.imgNotes("option", "canEdit", true);
                    } else {
                        $this.text('Edit');
                        $img.imgNotes('option', 'canEdit', false);
                    }
                });


                var $clear = $("#clear");
                $clear.on("click", function () {
                    $img.imgNotes('clear');
                });

                var $toggleZ = $("#toggleZoom");
                if ($img.imgNotes("option", "zoomable"))
                    $toggleZ.text("Zoom Off");
                else
                    $toggleZ.text("Zoom On");

                $toggleZ.on("click", function () {
                    var $this = $(this);
                    if ($this.text() == "Zoom On") {
                        $this.text("Zoom Off");
                        $img.imgNotes("option", "zoomable", true);
                    } else {
                        $this.text("Zoom On");
                        $img.imgNotes("option", "zoomable", false);
                    }
                });

            });
        })(jQuery);
    </script>


@endsection


