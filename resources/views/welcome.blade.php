@extends('layouts.app')

@section('content')

                <!-- Main content -->
    <section class="content">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Customer Survey</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="custFullName">Full Name</label>
                        <input type="text" class="form-control" id="fullNameInput" placeholder="Enter Full Name">
                      </div>
                      <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                    <div class="form-group">
                        <label for="question1">Here is a Question about your exp</label>
                        <input type="text" class="form-control" id="q1Input" placeholder="Enter Your answer">
                    </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                    </div>
                    <!-- /.box-body -->
      
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->
              </div>
            </div>
    </section>

@endsection