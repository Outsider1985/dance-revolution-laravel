@extends('admin.layout.master')

@section("content")
    <div class="admin-users-container">
        <div class="users-container">
            <div class="users-table">
                <div class="user-element">
                    <div class="user-data">
                        <div class="user-name">Nombre:</div>
                        <div class="user-dni">DNI:</div>
                        <div class="user-category">Categoría:</div>
                        <div class="user-created">Creado el:</div>
                    </div>
                    <div class="user-buttons">
                        <svg id="user-edit"></svg>
                        <svg id="user-delete"></svg>
                    </div>
                </div>
            </div>
            <div class="users-pages">
                <p id = "registers">X registros</p>
                <p id = "current-page">Mostrando la página x de X</p>
            </div>
            <div class="users-page-navigation">
                <ul class="users-page-navigation-buttons">
                    <li class="users-page-navigation-button">Primera</li>
                    <li class="users-page-navigation-button">Anterior</li>
                    <li class="users-page-navigation-button">Siguiente</li>
                    <li class="users-page-navigation-button">Última</li>
                </ul>
            </div>
        </div>
            <form class="form-container admin-form" id="user-form" action="/users/create" autocomplete="off">
                <div class="form-header">
                    <ul class="form-tabs">
                        <li class="form-tab">Contenido</li>
                        <li class="form-tab">Imágenes</li>
                        <li class="form-tab">Seo</li>
                    </ul>
                    <div class="form-buttons">
                        <button id="user-save">Guardar</button>
                        <button id="user-clean">Limpiar</button>
                        <input type="checkbox" id="user-on-off">Activar/desactivar</button>
                    </div>
                </div>
                <div class="form-input">
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
                        <input type="telephone" name="telephone" placeholder="Escribe teléfono de usuario">
                    </div>
                    <div class="form-comment">
                            <textarea type="text" name="description"  class="ckeditor" placeholder="Escribe descripción usuario"></textarea>
                    </div>     
                </div>
                <div id="errors-container"></div>
                <div id="popup-valid-form"></div>
            </form>
        </div>
    </div>
@endsection