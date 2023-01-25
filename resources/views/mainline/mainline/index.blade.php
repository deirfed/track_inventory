@extends('mainline.mainline_layout.base')

@section('sub-title')
<title>Data Mainline | TCSM</title>
@endsection

@section('sub-content')
<h4>Master Data Mainline > Data Span</h4>
<div class="row">
    <div class="col-sm-12">
      <div class="home-tab">
        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
          <div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card mt-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Span</h4>
                <a href="/mainline-create" class="btn btn-outline-dark btn-lg" type="button">Add Data</a>
                    <button class="btn btn-outline-dark btn-lg dropdown-toggle"  type="button" id="dropdownMenuIconButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: -10px;">
                      <i class="ti-link"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                      <a class="dropdown-item" href="#">Print</a>
                      <a class="dropdown-item" href="#">Export to Excel</a>
                      <a class="dropdown-item" href="#">Export to PDF</a>
                      <a class="dropdown-item" href="#">Import Excel File</a>
                    </div>
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">
                          No
                        </th>
                        <th class="text-center">
                          Area
                        </th>
                        <th class="text-center">
                          Line
                        </th>
                        <th class="text-center">
                          No. Span
                        </th>
                        <th class="text-center">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          1
                        </td>
                        <td class="text-center">
                          DAL-LBB
                        </td>
                        <td class="text-center">
                            DAL
                          </td>
                        <td class="text-center">
                            D01
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ModalSpan">Show</button>
                         </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>


  <div class="col-lg-4 col-md-6">
    <!-- Modal -->
    <div class="modal fade" id="ModalSpan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAdminTitle">Detail Span Mainline</h5>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-1">
                                <label for="nameWithTitle" class="form-label">No. Index</label>
                                <input readonly type="text" id="" name="no" class="form-control"
                                    placeholder="001" />
                            </div>
                            <div class="col mb-1">
                                <label for="" class="form-label">Area</label>
                                <input readonly type="text" id="" class="form-control" name="area"
                                    placeholder="DAL-LBB" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Line</label>
                                <input readonly type="text" id="" class="form-control" name="line"
                                    placeholder="DAL" />
                            </div>
                            <div class="col mb-1">
                                <label for="dobWithTitle" class="form-label">Nomer Span</label>
                                <input readonly type="text" id="" class="form-control" name="nospan"
                                placeholder="D-01" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Chainage</label>
                                <input readonly type="text" id="" class="form-control" name="chainage"
                                    placeholder="-0.200" />
                            </div>
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Panjang Span</label>
                                <input readonly type="text" id="" class="form-control" name="pspan"
                                    placeholder="9.64" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Jumlah Sleeper</label>
                                <input readonly type="text" id="" class="form-control" name="jsleeper"
                                    placeholder="13" />
                            </div>
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Spacing Sleeper mm</label>
                                <input readonly type="text" id="" class="form-control" name="spacingsleeper"
                                    placeholder="750" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Jenis Sleeper</label>
                                <input readonly type="text" id="" class="form-control" name="jenissleeper"
                                    placeholder="PC-A" />
                            </div>
                            <div class="col mb-1">
                                <label for="emailWithTitle" class="form-label">Joint</label>
                                <input readonly type="text" id="" class="form-control" name="joint"
                                    placeholder="IJ" />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Tutup
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection


