@extends('mainline.mainline_layout.base')

@section('sub-title')
<title>Add Data Relasi Defect | TCSM</title>
@endsection

@section('sub-content')
<h5>Master Data Mainline > Relasi Defect > Create Data</h5>
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
                  <h4 class="card-title">Form Data Relasi Part & Defect</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                        <label class="form-label">Part</label>
                        <select class="form-control" name="detail" id="">
                                <option disable value="">-Pilih Part-</option>
                                <option value="">TO</option>
                                <option value="">EJ</option>
                                <option value="">Rail Bonding</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Detail Part</label>
                        <select class="form-control" name="detail" id="">
                                <option disable value="">-Pilih Detail Part-</option>
                                <option value="">Sleeper FFU</option>
                                <option value="">Tounge Rail</option>
                                <option value="">Nut Bolt</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <label class="form-label">Defect Group</label>
                        <select class="form-control" name="detail" id="">
                                <option disable value="">-Pilih Defect-</option>
                                <option value="">Crack</option>
                                <option value="">AVS Dorceng</option>
                                <option value="">Kayu FFU Lapuk</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-outline-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
          </div>

      </div>
    </div>
  </div>
@endsection
