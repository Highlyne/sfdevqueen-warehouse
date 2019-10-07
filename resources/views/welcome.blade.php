@extends('layouts.app')

@section('content')

                <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-sm-10">
            <!-- box-header -->
            <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Customer Survey</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <!-- Account Number -->
                        <label for="account-number">Account Number</label>
                        <input
                        type="text"
                        class="form-control"
                        id="acctNum"
                        placeholder="Please provide your customer number"
                        />
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <!-- Customer Name -->
                        <label for="custFullName">Full Name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="name"
                        placeholder="Enter Full Name"
                        />
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <!-- Email Address -->
                        <label for="exampleInputEmail1">Email address</label>
                        <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Enter email"
                        />
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 1 -->
                        <label>My order arrived in perfect condition.</label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option>1- Strongly Disagree</option>
                        <option>2- Disagree</option>
                        <option>3- Not Apllicable</option>
                        <option>4- Agree</option>
                        <option>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 2 -->
                        <label>My order arrived in perfect condition.</label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option>1- Strongly Disagree</option>
                        <option>2- Disagree</option>
                        <option>3- Not Apllicable</option>
                        <option>4- Agree</option>
                        <option>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 3 -->
                        <label>My order arrived in perfect condition.</label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option>1- Strongly Disagree</option>
                        <option>2- Disagree</option>
                        <option>3- Not Apllicable</option>
                        <option>4- Agree</option>
                        <option>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 4 -->
                        <label>My order arrived in perfect condition.</label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option>1- Strongly Disagree</option>
                        <option>2- Disagree</option>
                        <option>3- Not Apllicable</option>
                        <option>4- Agree</option>
                        <option>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 5 -->
                        <label>My order arrived in perfect condition.</label>
                        <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option>1- Strongly Disagree</option>
                        <option>2- Disagree</option>
                        <option>3- Not Apllicable</option>
                        <option>4- Agree</option>
                        <option>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
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