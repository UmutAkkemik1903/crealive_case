@include ('admin/components/sidebar')
<div class="b-example-vr">
    <div class="category">
        <h2>Alt Kategori Ekle</h2>
        <hr>
        <div class="category-create">
            <a href="/admin/subcategory" class="btn" type="button">Geri Dön</a>
        </div>
        <br>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Kategori Seçin</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Adı</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
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
