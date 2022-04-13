<form class="form-container" id="contact-form" action="/users/create" autocomplete="off">
    <div class="form-element">
        <div class="form-label">
            <label for="name">Inscríbete!</label>
        </div>   
        <div class="form-input">
            <div class="form-column">
                <div class="form-item">
                    <input type="text" name="name" id="name" placeholder="Escribe tu nombre">
                </div>
                <div class="form-item">
                    <input type="text" name="dni" id="dni" placeholder="Escribe tu DNI"> 
                </div>
            </div>
            <div class="form-column">
                <div class="form-item">
                    <input type="text" name="email" id="email" placeholder="Escribe tu email"> 
                </div>
                <div class="form-item">
                    <input type="telephone" name="telephone" placeholder="Escribe tu teléfono">
                </div>
            </div>
            <div class="form-comment">
                <textarea type="text" name="comment"  class="ckeditor" placeholder="Escribe tu comentario"></textarea>
            </div>       
        </div>
    </div>
    <div class="form-element">
        <button class="slider-form-button" id="send-button">Enviar</button><!--botón para enlazar a la BD-->
    </div>
    <div id="errors-container"></div>
    <div id="popup-valid-form"></div>
</form>