<!DOCTYPE html>
<html lang="en">


@include('Dashboard.layouts.header')

<body class="animsition">
    <div class="page-wrapper">
       
         @include('Dashboard.layouts.navbar')
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('Dashboard.layouts.head')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach( $photos as $item )
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="card-img-top" style="height:200px" src="/gallery_images/{{ $item->filename }}" alt="Card image cap">
                                    <div class="card-body">
                                        <form id="{{ $item->filename }}" action="/images-delete" method="post" style="display:none">
                                            {{ csrf_field() }}
                                            <input type="text" name="id" value="{{ $item->filename }}"/>
                                            <input type="hidden" name="manual" value="true" />
                                        </form>
                                        <button onclick="document.getElementById('{{ $item->filename }}').submit()" class="btn btn-danger float-right">x</button>
                                    </div>  
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img-top" style="height:200px;background-color:#000" ></div>
                                    <div class="card-body">
                                        <form method="" action="">
                                            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#largeModal">+<button>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

     

@include('Dashboard.layouts.footer')

<!-- add new photos modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Ajout d'images dans la galerie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1">
                            <br>                           
                            <form method="post" action="{{ url('/images-save') }}"
                                enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                                {{ csrf_field() }}
                                <div class="dz-message">
                                    <div class="col-xs-8">
                                        <div class="message">
                                            <p>Glisser vos images ou cliquer sur cette zone pour les ajouter</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="fallback">
                                    <input type="file" name="file" multiple>
                                </div>
                                <input type="hidden" name="type" value="3"/>
                            </form>
                        </div>
                    </div>
                
                    <!--Dropzone Preview Template-->
                    <div id="preview" style="display: none;">
                
                        <div class="dz-preview dz-file-preview">
                            <div class="dz-image"><img data-dz-thumbnail /></div>
                
                            <div class="dz-details">
                                <div class="dz-size"><span data-dz-size></span></div>
                                <div class="dz-filename"><span data-dz-name></span></div>
                            </div>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                
                
                
                            <div class="dz-success-mark">
                
                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                    <title>Check</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </svg>
                
                            </div>
                            <div class="dz-error-mark">
                
                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                    <title>erreur</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!--End of Dropzone Preview Template-->
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="location.href ='/gallery' " class="btn btn-primary"><i class="fa fa-eye"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end add new photos modal -->

</body>

</html>
<!-- end document-->
