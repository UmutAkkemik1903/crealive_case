@include ('admin/components/sidebar')
<div class="b-example-vr">

    <div class="category">
        <h2>Kategori Düzenle</h2>
        <hr>
        <div class="category-create">
            <a href="/admin/category" class="btn" type="button">Geri Dön</a>
        </div>
        <br>
        <form class="table-striped">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Adı</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Düzenle</button>
        </form>
    </div>
</div>
</main>

<style>
    .category{
        padding: 50px 25px 100px 100px;
        min-width: 1500px;
    }

    .category-create a{
        background-color: darkorange;
        color: whitesmoke;
    }
    .category-create a:hover{
        background-color: darkorange;
        color: whitesmoke;
    }
</style>
