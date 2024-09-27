<?php
// คิวรี่ข้อมูลลูกค้า
try {
    $queryMember = $condb->prepare("SELECT * FROM tbl_member");
    $queryMember->execute();
    $rsMember = $queryMember->fetchAll();
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
                        <a href="" class="btn btn-primary btn-sm">+เพิ่มข้อมูล</a>
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
                            <div class="table-responsive">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped table-sm dataTable no-footer dtr-inline" aria-describedby="example1_info" style="width: 1211px;">
                                                <thead>
                                                    <tr class="table-info""><th width=" 5%" class="text-center">ID.</th>
                                                        <th width=" 82%">ชื่อ - สกุล</th>
                                                        <th width="6%" class="text-center">รหัส</th>
                                                        <th width="6%" class="text-center">แก้ไข</th>
                                                        <th width="6%" class="text-center">ลบ</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td align="center">1.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                    <tr>
                                                        <td align="center">2.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                    <tr>
                                                        <td align="center">3.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                    <tr>
                                                        <td align="center">4.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                    <tr>
                                                        <td align="center">5.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                    <tr>
                                                        <td align="center">6.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                    <tr>
                                                        <td align="center">7.</td>
                                                        <td></td>
                                                        <td align=" center"><a href="member.php" class="btn btn-info btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"><a href="member.php" class="btn btn-warning btn-sm"><i
                                                                    class="nav-icon fas fa-edit"></i></a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('ยืนยันการลบข้อมูล?')"><i
                                                                    class="nav-icon fas fa-trash"></i></a>
                                                        </td>

                                                    <tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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