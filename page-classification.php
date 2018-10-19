<?php require_once("header.php") ?>

<div class="content">
    <h1> Classification Model </h1>
    <form action="phpscript/teste.php" method="POST">
        <table>
            <tr>
                <td><label> Insert the Sepal length</label></td>
                <td><input name="sepal-length" type="text" placeholder="Ex: 5.0"/></td>
            </tr>
            <tr>
                <td><label> Insert the Sepal width</label></td>
                <td><input name="sepal-width" type="text" placeholder="Ex: 5.0"/></td>
            </tr>
            <tr>
                <td><label> Insert the Petal length</label></td>
                <td><input name="petal-lenght" type="text" placeholder="Ex: 5.0"/></td>
            </tr>
            <tr>
                <td><label> Insert the Petal width</label></td>
                <td><input name="petal-width" type="text" placeholder="Ex: 5.0"/></td>
            </tr>
        </table>
        

        <button> CLASSIFY</button>
    </form>

</div>

<?php require_once("footer.php")?>
