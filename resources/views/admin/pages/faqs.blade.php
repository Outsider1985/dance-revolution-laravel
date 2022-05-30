@extends('admin.layout.table_form')

@section("table")

    <div class="table">

        @foreach($faqs as $faq)
            <div class="table-element">
                <ul class="table-data">
                    <li class="user-name">id: {{$faq->id}}<span></span></li>
                    <li class="user-name">Nombre: {{$faq->name}}<span></span></li>
                    <li class="user-created">Creado el: {{$faq->created_at}}<span></span></li>
                </ul>
                <div class="table-buttons">
                    <svg class="edit-button" data-url="{{route('faqs_edit', ['faq' => $faq->id])}}" style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M15.1,7.07C15.24,7.07 15.38,7.12 15.5,7.23L16.77,8.5C17,8.72 17,9.07 16.77,9.28L15.77,10.28L13.72,8.23L14.72,7.23C14.82,7.12 14.96,7.07 15.1,7.07M13.13,8.81L15.19,10.87L9.13,16.93H7.07V14.87L13.13,8.81Z" />                        </svg>
                    <svg class="delete-button" data-url="{{route('faqs_destroy', ['faq' => $faq->id])}}" style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                    </svg>
                </div>
            </div>
        @endforeach

    </div>
    <div class="page-navigator">
        <div class="page">
            <p id = "registers"><span>X</span> registros</p>
            <p id = "current-page">Mostrando la página <span>X</span> de <span>X</span></p>
        </div>
        <div class="page-navigation">
            <ul class="page-navigation-buttons">
                <li class="users-page-navigation-button"><span>Primera</span></li>
                <li class="users-page-navigation-button"><span>Anterior</span></li>
                <li class="users-page-navigation-button"><span>Siguiente</span></li>
                <li class="users-page-navigation-button"><span>Última</span></li>
            </ul>
        </div>
    </div>

@endsection

@section("form")
       
    <form action="{{route('faqs_store')}}" class="admin-form" id="user-form" autocomplete="off">
        <div class="form-header">
            <ul class="form-tabs">
                <li class="form-tab is_selected" data-tabtrigger="contenido">Contenido</li>
                <li class="form-tab" data-tabtrigger="imagenes">Imágenes</li>
                <li class="form-tab" data-tabtrigger="seo">Seo</li>
            </ul>
            <div class="form-buttons">
                <svg id="save-button" data-url="{{route('faqs_store')}}" style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                </svg>
                <svg id="clean-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                </svg>
                <div class="button r" id="button-1">
                    <input type="checkbox" class="checkbox" checked />
                    <div class="knobs"></div>
                    <div class="layer"></div>
                </div>
            </div>
        </div>
        <div class="form-users tab-content is_active" data-tabcontent="contenido">
            <div class="form-item">
                <input type="text" name="name" id="name" placeholder="Escribe nombre de faq">
            </div>
            <div class="form-item">
                <input type="text" name="title" id="title" placeholder="Escribe título de faq"> 
            </div>
            <div class="form-item">
                <input type="text" name="question" id="question" placeholder="Escribe la pregunta del faq"> 
            </div>
            <div class="form-item">
                <input type="text" name="answer" id="answer" placeholder="Escribe la respuesta del faq"> 
            </div>
        </div>
        <div class="form-input tab-content" data-tabcontent="imagenes">
            <div class="image-selector">
                <label class="file-input">
                <div id="image-preview">
                    <svg class="image-svg" viewBox="0 0 24 24">
                        <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                    </svg>
                    <img class="image">
                </div>                                             
                <input type="file" name="choose-file" class="choose-file" accept="image/*" >
            </div>
            <div class="image-selector">
                <label class="file-input">
                <div id="image-preview">
                    <svg class="image-svg" viewBox="0 0 24 24">
                        <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                    </svg>
                    <img class="image">
                </div>                                             
                <input type="file" name="choose-file" class="choose-file" accept="image/*" >
            </div>
            <div class="image-selector">
                <label class="file-input">
                <div id="image-preview">
                    <svg class="image-svg" viewBox="0 0 24 24">
                        <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                    </svg>
                    <img class="image">
                </div>                                             
                <input type="file" name="choose-file" class="choose-file" accept="image/*" >
            </div>
        </div>
        <div class="form-input tab-content" data-tabcontent="seo">
            <div class="form-item">
                <input type="text" name="name" id="name" placeholder="Escribe nombre de seo">
            </div>
            <div class="form-item">
                <textarea type="text" name="description"  class="ckeditor" placeholder="Escribe descripción seo"></textarea>
            </div>    
        </div>
        <div id="errors-container"></div>
        <div id="popup-valid-form"></div>
    </form>

@endsection