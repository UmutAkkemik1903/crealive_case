@include ('admin/components/sidebar')
<div class="b-example-vr">
    <div class="category">
        <div class="category-create">
            <a class="btn" href="/admin/subcategory-create" type="button">Yeni Ekle</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Atl Kategori Adı</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Deneme</th>
                <td>
                    <a href="/admin/subcategory-edit"><i style="color: orange" class="fas fa-pencil"></i></a>
                    <a style="margin-left: 10px" href=""><i style="color: red" class="fas fa-trash"></i></a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
</main>

<style>
    .category{
        padding: 50px 25px 100px 100px;
        min-width: 1500px;
    }
    .category-create{
        float: right;
    }
    .category-create a{
        background-color: #4b8d2d;
        color: whitesmoke;
    }
    .category-create a:hover{
        background-color: #4b8d2d;
        color: whitesmoke;
    }
</style>
