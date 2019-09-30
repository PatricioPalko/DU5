
<?php
global $directoryURI;
$directoryURI = basename($_SERVER['SCRIPT_NAME'], '.php');
if($directoryURI === 'index') {
    $directoryURI = 'add';

    echo '<div class="row">';
    echo    '<form  id="'.$directoryURI . '-form"  class="col-sm-6" action="_inc/'.$directoryURI.'-item.php" method="post">';
    echo        '<p class="form-group">';
    echo            '<textarea class="form-control" name="message" id="text" rows="3" placeholder="napis nieco"></textarea>';
    echo        '</p>';
    echo        '<p class="form-group submit-button">';
    echo            '<input class="btn-sm btn-danger" type="submit" value="add new item"';
    echo        '</p>';
    echo    '</form>';
    echo '</div>';

} else {

    echo '<div class="row">';
    echo    '<form id="' . $directoryURI . '-form"  class="col-sm-6" action="_inc/' . $directoryURI . '-item" method="post">';
    echo        '<p class="form-group">';
    echo            '<textarea class="form-control" name="message" id="text" rows="3">' . $item . '</textarea>';
    echo        '</p>';
    echo        '<p class="form-group">';
    echo            '<input name="id" type="hidden" value="' . $_GET["id"] . '" >';
    echo            '<input class="btn-sm btn-danger" type="submit" value="' . $directoryURI . ' item">';
    echo            '<span class="controls">';
    echo                '<a href="' . $base_url . '" class="back-link text-muted">back</a>';
    echo            '</span>';
    echo        '</p>';
    echo    '</form>';
    echo '</div>';
}
echo $directoryURI;
?>
<!---->
<!--<div class="row">-->
<!--    <form id="--><?php //echo $directoryURI . '-form'?><!--" class="col-sm-6" action="--><?php //echo '_inc/' . $directoryURI . '-item.php' ?><!--" method="post">-->
<!--        <p class="form-group">-->
<!--            <textarea class="form-control" name="message" id="text" rows="3">--><?php //echo $item ?><!--</textarea>-->
<!--        </p>-->
<!--        <p class="form-group">-->
<!--            <input name="id" type="hidden" value="--><?php //echo $_GET['id'] ?><!--">-->
<!--            <input class="btn-sm btn-danger" type="submit" value="--><?php //echo $directoryURI ?><!-- item">-->
<!--            <span class="controls">-->
<!--                <a href="--><?php //echo $base_url ?><!--" class="back-link text-muted">back</a>-->
<!--            </span>-->
<!--        </p>-->
<!--    </form>-->
<!--</div>-->
<!---->
<!--<div class="row">-->
<!--    <form id="add-form" class="col-sm-6" action="_inc/add-item.php" method="post">-->
<!--        <p class="form-group">-->
<!--            <textarea class="form-control" name="message" id="text" rows="3" placeholder="is there something to do?"></textarea>-->
<!--        </p>-->
<!--        <p class="form-group submit-button">-->
<!--            <input class="btn-sm btn-danger" type="submit" value="add new item">-->
<!--        </p>-->
<!--    </form>-->
<!--</div>-->
