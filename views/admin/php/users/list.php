<div id="users-list" class="p-4 bg-secondary pb-6">
    <div class="card">
        <input id="search-users" name="search-users" type="text" class="form-control" placeholder="Kullanıcı Ara">
    </div>
    <div class="row" id="filtered" name="filtered">
        <?php
        include '../../../php/connection/db_connect.php';
        include 'functions.php';
        $filter = $_GET['search-users'];
        getAllUsers($filter);
        ?>
    </div>
</div>
</div>