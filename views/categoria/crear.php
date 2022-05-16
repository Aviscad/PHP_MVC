<h1>Crear Nueva Categoria</h1>

<form action="<?= BASE_URL ?>categoria/save" method="POST">
    <label for="categoria">Categoría</label>
    <input type="text" name="categoria" required>
    <input type="submit" value="Guardar">
</form>