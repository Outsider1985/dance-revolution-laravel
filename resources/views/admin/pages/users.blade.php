@extends('admin.layout.master')

@section("content")
    <div class="admin-container">
        <div class="table-container">
            <div class="table">
                <div class="table-element">
                    <ul class="table-data">
                        <li class="user-name">Nombre:<span></span></li>
                        <li class="user-dni">DNI:<span></span></li>
                        <li class="user-category">Categoría:<span></span></li>
                        <li class="user-created">Creado el:<span></span></li>
                    </ul>
                    <div class="table-buttons">
                        <svg class="edit-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M15.1,7.07C15.24,7.07 15.38,7.12 15.5,7.23L16.77,8.5C17,8.72 17,9.07 16.77,9.28L15.77,10.28L13.72,8.23L14.72,7.23C14.82,7.12 14.96,7.07 15.1,7.07M13.13,8.81L15.19,10.87L9.13,16.93H7.07V14.87L13.13,8.81Z" />                        </svg>
                        <svg class="delete-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                        </svg>
                    </div>
                </div>
                <div class="table-element">
                    <ul class="table-data">
                        <li class="user-name">Nombre:<span></span></li>
                        <li class="user-dni">DNI:<span></span></li>
                        <li class="user-category">Categoría:<span></span></li>
                        <li class="user-created">Creado el:<span></span></li>
                    </ul>
                    <div class="table-buttons">
                        <svg class="edit-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M15.1,7.07C15.24,7.07 15.38,7.12 15.5,7.23L16.77,8.5C17,8.72 17,9.07 16.77,9.28L15.77,10.28L13.72,8.23L14.72,7.23C14.82,7.12 14.96,7.07 15.1,7.07M13.13,8.81L15.19,10.87L9.13,16.93H7.07V14.87L13.13,8.81Z" />                        </svg>
                        <svg class="delete-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                        </svg>
                    </div>
                </div>
                <div class="table-element">
                    <ul class="table-data">
                        <li class="user-name">Nombre:<span></span></li>
                        <li class="user-dni">DNI:<span></span></li>
                        <li class="user-category">Categoría:<span></span></li>
                        <li class="user-created">Creado el:<span></span></li>
                    </ul>
                    <div class="table-buttons">
                        <svg class="edit-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M15.1,7.07C15.24,7.07 15.38,7.12 15.5,7.23L16.77,8.5C17,8.72 17,9.07 16.77,9.28L15.77,10.28L13.72,8.23L14.72,7.23C14.82,7.12 14.96,7.07 15.1,7.07M13.13,8.81L15.19,10.87L9.13,16.93H7.07V14.87L13.13,8.81Z" />                        </svg>
                        <svg class="delete-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                        </svg>
                    </div>
                </div>
                <div class="table-element">
                    <ul class="table-data">
                        <li class="user-name">Nombre:<span></span></li>
                        <li class="user-dni">DNI:<span></span></li>
                        <li class="user-category">Categoría:<span></span></li>
                        <li class="user-created">Creado el:<span></span></li>
                    </ul>
                    <div class="table-buttons">
                        <svg class="edit-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M15.1,7.07C15.24,7.07 15.38,7.12 15.5,7.23L16.77,8.5C17,8.72 17,9.07 16.77,9.28L15.77,10.28L13.72,8.23L14.72,7.23C14.82,7.12 14.96,7.07 15.1,7.07M13.13,8.81L15.19,10.87L9.13,16.93H7.07V14.87L13.13,8.81Z" />                        </svg>
                        <svg class="delete-button" style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                        </svg>
                    </div>
                </div>
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
        </div>
        <form class="form-container admin-form" id="user-form" action="/users/create" autocomplete="off">
                <div class="form-header">
                    <ul class="form-tabs">
                        <li class="form-tab is_selected" data-tabtrigger="contenido">Contenido</li>
                        <li class="form-tab" data-tabtrigger="imagenes">Imágenes</li>
                        <li class="form-tab" data-tabtrigger="seo">Seo</li>
                    </ul>
                    <div class="form-buttons">
                        <svg id="save-button" style="width:24px;height:24px" viewBox="0 0 24 24">
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
                        <input type="text" name="name" id="name" placeholder="Escribe nombre de usuario">
                    </div>
                    <div class="form-item">
                        <input type="text" name="category" id="category" placeholder="Escribe categoría de usuario"> 
                    </div>
                    <div class="form-item">
                        <input type="text" name="email" id="email" placeholder="Escribe email de usuario"> 
                    </div>
                    <div class="form-item">
                        <input type="text" name="password" placeholder="Escribe clave de usuario">
                    </div>
                    <div class="form-item">
                        <textarea type="text" name="description"  class="ckeditor" placeholder="Escribe descripción usuario"></textarea>
                    </div>     
                </div>
                <div class="form-input tab-content" data-tabcontent="imagenes">
                    <div class="form-item">
                        <input type="text" name="name" id="name" placeholder="Escribe nombre de imagen">
                    </div>
                    <div class="form-item">
                        <textarea type="text" name="description"  class="ckeditor" placeholder="Escribe descripción imagen"></textarea>
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
    </div>
@endsection