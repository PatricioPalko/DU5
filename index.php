<?php include_once "_partials/header.php" ?>

    <div class="page-header">
        <h1>LIST</h1>
    </div>

    <?php


    $data = $database->select('items', [ 'id', 'text' ]);

    ?>

    <ul id="item-list" class="list-group col-sm-6">
        <?php
            if (!empty($data)) {
                $allertMessage = '';
                foreach ( $data as $item ) {
                    echo '<li id="item-'. $item['id'] .'" class="list-group-item">';
                    echo    $item['text'];
                    echo '  <div class="controls pull-right">';
                    echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link">edit</a>';
                    echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link text-muted glyphicon glyphicon-remove"></a>';
                    echo '  </div>';
                    echo '</li>';
                }
            }
            else {
                $allertMessage = 'plese add item';
            }
        ?>
    </ul>

<?php require_once "_partials/form.php" ?>

<!---->
<!--    <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="post">-->
<!--        <p class="form-group">-->
<!--            <textarea class="form-control" name="message" id="text" rows="3" placeholder="is there something to do?"></textarea>-->
<!--        </p>-->
<!--	    <p class="form-group submit-button">-->
<!--		    <input class="btn-sm btn-danger" type="submit" value="add new item">-->
<!--	    </p>-->
<!--    </form>-->

<?php
 if($allertMessage !== '') print_r($allertMessage);
?>

<?php include_once "_partials/footer.php" ?>