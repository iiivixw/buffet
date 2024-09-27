<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ฟอร์มเพิ่มข้อมูลลูกค้า</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-1">ชื่อ-สกุล</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="name" class="form-control" required placeholder="ชื่อ-สกุล" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1">รหัส</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="password" class="form-control" required placeholder="รหัส" />
                                        </div>
                                    </div>

                                    <div class="col-sm-10 offset-sm-1">
                                        <button type="submit" class="btn btn-info">เพิ่มข้อมูล</button>
                                        <a href="member.php" class="btn btn-danger">ยกเลิก</a>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['name']) && isset($_POST['password'])) {
                                $name = $_POST['name'];
                                $password = $_POST['password'];

                                
                                $servername = "localhost";
                                $username = 'root';
                                $password = 'root';

                                try {
                                    
                                    $condb = new PDO("mysql:host=$servername;dbname=db_website;charset=utf8", $username, $password);
                                    
                                    $condb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmtInsertMember = $condb->prepare("INSERT INTO tbl_member 
                                    (
                                        name, 
                                        password
                                    )
                                    VALUES 
                                    (
                                        :name,
                                        :password
                                    )
                                    ");
                                    // bindParam
                                    $stmtInsertMember->bindParam(':name', $name, PDO::PARAM_STR);
                                    $stmtInsertMember->bindParam(':password', $password, PDO::PARAM_STR);

                                    
                                    $result = $stmtInsertMember->execute();

                                    
                                    $condb = null;

                                    
                                    if ($result) {
                                        echo 'Insert successfully';
                                    } else {
                                        echo 'Error';
                                    }
                                } catch (PDOException $e) {
                                   
                                    echo 'Connection failed: ' . $e->getMessage();
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->