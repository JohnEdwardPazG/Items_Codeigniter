<?= $cabecera ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingrese la información del item </h5>
        <p class="card-text">
        <form method="post" action="<?= site_url('/actualizar') ?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $item['id'] ?>">

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" value="<?= $item['name'] ?>" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input id="category" value="<?= $item['category'] ?>" class="form-control" type="text" name="category">
            </div>
            <div class="form-group">
                <label for="cost_price">Cost_price</label>
                <input id="cost_price" value="<?= $item['cost_price'] ?>" class="form-control" type="double" name="cost_price">
            </div>
            <div class="form-group">
                <label for="unit_price">Unit_price</label>
                <input id="unit_price" value="<?= $item['unit_price'] ?>" class="form-control" type="double" name="unit_price">
            </div>
            <div class="form-group">
                <label for="pic_filename">Pic_filename</label>
                <input id="pic_filename" value="<?= $item['pic_filename'] ?>" class="form-control" type="text" name="pic_filename">
            </div>
            <button class="btn btn-success" type="submit">Actualizar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
        </form>
        </p>
    </div>
</div>
<?= $piepagina ?>