@extends('mainline.mainline_layout.base')

@section('sub-title')
<title>Add Data Mainline | TCSM</title>
@endsection

@section('sub-content')
<h5>Master Data Mainline > Part > Create Data</h5>
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
                  <h4 class="card-title">Form Data Part</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                        <label class="form-label">Area</label>
                        <select class="form-control" name="detail" id="">
                                <option disable value="">-Pilih Area-</option>
                                <option value="">Mainline</option>
                                <option value="">Depo</option>
                                <option value="">DAL</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Line</label>
                        <select class="form-control" name="detail" id="">
                                <option disable value="">-Pilih Area-</option>
                                <option value="">UT</option>
                                <option value="">DT</option>
                                <option value="">Middle Track</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputName1">No. Span</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Input Span Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Chainage</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Input Chainage (Km)">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Panjang Span</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Input Panjang Span (m)">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Jumlah Sleeper</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Input Jumlah Sleeper (pcs)">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Spacing Sleeper</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Input Nilai Spacing Sleeper">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Jenis Sleeper</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Input Jenis Sleeper">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Joint Sleeper</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Input Jenis Joint Sleeper">
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
