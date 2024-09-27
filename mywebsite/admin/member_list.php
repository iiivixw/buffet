<?php
// คิวรี่ข้อมูลลูกค้า
$rsMember = []; 
try {
    $queryMember = $condb->prepare("SELECT * FROM tbl_member");
    $queryMember->execute();
    $rsMember = $queryMember->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ข้อมูลลูกค้า
                        <a href="add_member.php" class="btn btn-primary">+เพิ่มข้อมูล</a>
                    </h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr class="table-info">
                                        <th width="5%" class="text-center">ID.</th>
                                        <th width="83%">ชื่อ - สกุล</th>
                                        <th width="6%" class="text-center">รหัส</th>
                                        <th width="6%" class="text-center">แก้ไข</th>
                                        <th width="6%" class="text-center">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($rsMember)) {
                                        $i = 1; // เริ่มนับ ID
                                        foreach ($rsMember as $row) { ?>
                                    <tr>
                                        <td align="center"><?php echo $i++; ?>.</td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td align="center"><?php echo htmlspecialchars($row['passwoed']); ?></td>
                                        <!-- แก้ไขหากชื่อคอลัมน์ผิด -->
                                        <td align="center">
                                            <a href="member_edit.php?id=<?php echo $row['member_id']; ?>"
                                                class="btn btn-info btn-sm">
                                                <i class="nav-icon fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="delete_member.php?id=<?php echo $row['member_id']; ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('ยืนยันการลบข้อมูล?')">
                                                <i class="nav-icon fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }
                                    } else { ?>
                                    <tr>
                                        <td colspan="5" align="center">ไม่มีข้อมูลลูกค้า</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->