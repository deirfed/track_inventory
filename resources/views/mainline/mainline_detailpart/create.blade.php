@extends('mainline.mainline_layout.base')

@section('sub-title')
<title>Add Data Detail Part | TCSM</title>
@endsection

@section('sub-content')
<h5>Master Data Mainline > Detail Part > Create Data</h5>
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
                  <h4 class="card-title">Form Data Detail Part</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Detail Part Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Input Part Detail">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Part Group</label>
                        <select class="form-control" name="class_id" id="">
                                <option disable value="">-Part Group-</option>
                                <option value="">EJ</option>
                                <option value="">RJG</option>
                                <option value="">Rail Bonding</option>
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
