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
            <form method="POST" action="/survey" role="form">
                <!-- CSRF Token // Proctection to ensure submission only comes in from this form -->
                {{csrf_field() }}
                <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <!-- Account Number -->
                        <label for="account-number">Account Number</label>
                        <input
                        type="text"
                        class="form-control"
                        name="acctNum"
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
                        name="name"
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
                        name="email"
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
                        <select class="form-control select2" name="Q1" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option value={{1}}>1- Strongly Disagree</option>
                        <option value={{2}}>2- Disagree</option>
                        <option value={{3}}>3- Not Apllicable</option>
                        <option value={{4}}>4- Agree</option>
                        <option value={{5}}>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 2 -->
                        <label>My order arrived in a timely manner.</label>
                        <select class="form-control select2" name="Q2" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option value={{1}}>1- Strongly Disagree</option>
                        <option value={{2}}>2- Disagree</option>
                        <option value={{3}}>3- Not Apllicable</option>
                        <option value={{4}}>4- Agree</option>
                        <option value={{5}}>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 3 -->
                        <label>The warehouse staff was friendly and helpful.</label>
                        <select class="form-control select2" name="Q3" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option value={{1}}>1- Strongly Disagree</option>
                        <option value={{2}}>2- Disagree</option>
                        <option value={{3}}>3- Not Apllicable</option>
                        <option value={{4}}>4- Agree</option>
                        <option value={{5}}>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 4 -->
                        <label>I will place an order from this location again.</label>
                        <select class="form-control select2" name="Q4" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option value={{1}}>1- Strongly Disagree</option>
                        <option value={{2}}>2- Disagree</option>
                        <option value={{3}}>3- Not Apllicable</option>
                        <option value={{4}}>4- Agree</option>
                        <option value={{5}}>5- Strongly Agree</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <!-- Question Block 5 -->
                        <label>I would reccomend a friend to shop at this location.</label>
                        <select class="form-control select2" name="Q5" style="width: 100%;">
                        <option selected="selected">Please Select One</option>
                        <option value={{1}}>1- Strongly Disagree</option>
                        <option value={{2}}>2- Disagree</option>
                        <option value={{3}}>3- Not Apllicable</option>
                        <option value={{4}}>4- Agree</option>
                        <option value={{5}}>5- Strongly Agree</option>
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
    <div class="row">
            <div class="col-sm-12">
                <div style="margin:20px;" class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Example</h3>
                        </div>
                        <div class="box-body">
                          Your response will post to the application's table.  The model will sync with the custom Feedback__c Salesforce object.
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
            </div>
        </div>              
</section>

@endsection