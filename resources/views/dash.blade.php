@extends('layouts.app')

@section('content')

<h1 style="margin:20px;">Admin Dashboard </h1>
<section >
        <!-- Info boxes -->
        <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">Total Survey Response</span>
                    <span class="info-box-number">{{$recordCount}}</span>
                  </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-fw fa-check"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text">Question 1</span>
                <span class="info-box-number">{{$q1Count}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-fw fa-truck"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">Question 2</span>
                    <span class="info-box-number">{{$q2Count}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
          <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-fw fa-smile-o"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">Question 3</span>
                    <span class="info-box-number">{{$q3Count}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
  
          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>
  
          <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text">Question 4</span>
                <span class="info-box-number">{{$q4Count}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-2 col-sm-12 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-fw fa-thumbs-up"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text">Question 5</span>
                <span class="info-box-number">{{$q5Count}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
<div class="row">
    <div class=class="col-md-8 col-sm-12 col-xs-12">
        <div style="margin:20px;" class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Example</h3>
                </div>
                <div class="box-body">
                  Here is an example of data coming in from the Salesforce custom Feedback__c object synced with the application's PSQL model.
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
    </div>
</div>
            

</section>  

@endsection