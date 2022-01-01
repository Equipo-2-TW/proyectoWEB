<div class="info">
    <div class="title">Subir materiales</div>
    <div class="description center manage_themes">
        <form method="post" enctype="multipart/form-data">
            <label for="unit">Bloque:</label>
            <input type="text" name="unit" id="unit"/>
            <label for="topic">Tema:</label>
            <input type="text" name="topic" id="topic"/>
            <label for="subtopic">Subtema:</label>
            <input type="text" name="subtopic" id="subtopic"/>
            <label for="type">Tipo de material:</label>
            <select name="type" id="type">
                <option value="video">Video</option>
                <option value="material">Material</option>
                <option value="imprimible">Imprimible</option>
                <option value="actividad">Actividad</option>
                <option value="examen">Examen</option>
            </select>
            <label for="activity">Actividad:</label>
            <input type="file" name="file" id="activity"/>
            <input type="submit" name="upload" value="Enviar"/>
        </form>
    </div>
</div>
