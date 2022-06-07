@extends('admin.layout.table_form')

@section("table")
    <div class="table">
        @if(isset($users))
            @foreach($users as $user_element)
            <div class="table-element">
                <ul class="table-data">
                    <li class="table-item">id: <span>{{$user_element->id}}</span></li>
                    <li class="table-item">Nombre: <span>{{$user_element->name}}</span></li>
                    <li class="table-item">Tel: <span>{{$user_element->telephone}}</span></li>
                    <li class="table-item">Email: <span>{{$user_element->email}}</span></li>
                    <li class="table-item">Creado el: <span>{{$user_element->created_at}}</span></li>
                </ul>
                <div class="table-buttons">
                    <svg class="edit-button" data-url="{{route('users_edit', ['user' => $user_element->id])}}" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M15.1,7.07C15.24,7.07 15.38,7.12 15.5,7.23L16.77,8.5C17,8.72 17,9.07 16.77,9.28L15.77,10.28L13.72,8.23L14.72,7.23C14.82,7.12 14.96,7.07 15.1,7.07M13.13,8.81L15.19,10.87L9.13,16.93H7.07V14.87L13.13,8.81Z" />
                    </svg>
                    <svg class="delete-button" data-url="{{route('users_destroy', ['user' => $user_element->id])}}" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                    </svg>
                </div>
            </div>
            @endforeach
        @endif
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
    @if(isset($user))
        <form action="{{route('users_store')}}" class="admin-form" id="form" autocomplete="off">    
            <div class="form-header">
                <ul class="form-tabs">
                    <li class="form-tab is_selected" data-tabtrigger="contenido">Contenido</li>
                    <li class="form-tab" data-tabtrigger="imagenes">Imágenes</li>
                    <li class="form-tab" data-tabtrigger="seo">Seo</li>
                </ul>
                <div class="form-buttons">
                    <svg id="save-button" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                    </svg>
                    <svg id="clean-button" data-url="{{route('users_create')}}" viewBox="0 0 24 24">
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
                <input type="hidden" name="id" value="{{isset($user->id) ? $user->id : ''}}">
                <div class="form-item">
                    <input type="text" name="name" id="name" placeholder="Escribe nombre de usuario" value="{{isset($user->name) ? $user->name : ''}}">
                </div>
                <div class="form-item">
                    <input type="text" name="telephone" id="telephone" placeholder="Escribe teléfono de usuario" value="{{isset($user->telephone) ? $user->telephone : ''}}"> 
                </div>
                <div class="form-item">
                    <input type="email" name="email" id="email" placeholder="Escribe email de usuario" value="{{isset($user->email) ? $user->email : ''}}"> 
                </div>
                <div class="form-item">
                    <input type="password" name="password" id="password" placeholder="Escribe clave de usuario">
                </div>
                <div class="form-item">
                    <input type="password" name="password_confirmation" id="password-confirmation" placeholder="Escribe de nuevo clave de usuario">
                </div>
                <div class="form-item">
                    <textarea name="description" class="ckeditor" placeholder="Escribe funciones de usuario">{{isset($user->description) ? $user->description : ''}}</textarea>
                </div> 
            </div>
            <div class="form-input tab-content" data-tabcontent="imagenes">
                <div class="image-selector">
                    <label class="file-input">
                    <div id="image-preview">
                        <svg class="image-load" viewBox="0 0 24 24">
                            <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                        </svg>
                        <svg class="image-delete" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,3H16.3H7.7H5A2,2 0 0,0 3,5V7.7V16.4V19A2,2 0 0,0 5,21H7.7H16.4H19A2,2 0 0,0 21,19V16.3V7.7V5A2,2 0 0,0 19,3M15.6,17L12,13.4L8.4,17L7,15.6L10.6,12L7,8.4L8.4,7L12,10.6L15.6,7L17,8.4L13.4,12L17,15.6L15.6,17Z" />
                        </svg>
                        <img class="image">
                    </div>                                             
                    <input type="file" name="choose-file" class="choose-file" accept="image/*" >
                </div>
                <div class="image-selector">
                    <label class="file-input">
                    <div id="image-preview">
                        <svg class="image-load" viewBox="0 0 24 24">
                            <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                        </svg>
                        <svg class="image-delete" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,3H16.3H7.7H5A2,2 0 0,0 3,5V7.7V16.4V19A2,2 0 0,0 5,21H7.7H16.4H19A2,2 0 0,0 21,19V16.3V7.7V5A2,2 0 0,0 19,3M15.6,17L12,13.4L8.4,17L7,15.6L10.6,12L7,8.4L8.4,7L12,10.6L15.6,7L17,8.4L13.4,12L17,15.6L15.6,17Z" />
                        </svg>
                        <img class="image">
                    </div>                                             
                    <input type="file" name="choose-file" class="choose-file" accept="image/*" >
                </div>
                <div class="image-selector">
                    <label class="file-input">
                    <div id="image-preview">
                        <svg class="image-load" viewBox="0 0 24 24">
                            <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                        </svg>
                        <svg class="image-delete" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,3H16.3H7.7H5A2,2 0 0,0 3,5V7.7V16.4V19A2,2 0 0,0 5,21H7.7H16.4H19A2,2 0 0,0 21,19V16.3V7.7V5A2,2 0 0,0 19,3M15.6,17L12,13.4L8.4,17L7,15.6L10.6,12L7,8.4L8.4,7L12,10.6L15.6,7L17,8.4L13.4,12L17,15.6L15.6,17Z" />
                        </svg>
                        <img class="image">
                    </div>                                             
                    <input type="file" name="choose-file" class="choose-file" accept="image/*" >
                </div>
            </div>
            <div id="errors-container"></div>
            <div id="popup-valid-form"></div>
        </form>
    @endif
@endsection