@extends('layouts.app')
@section('title','الاعدادات العامة')
@section('setting','active')

@section('content')

<style>

 input{
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}
</style>
  <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <!-- left column -->
         <div class="col-md-11">

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">البيانات الاساسية</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('setting.store')}}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="card-body custom-design">

                  <div class="form-group row">
                    <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم المطعم</label>
                    <div class="col-md-6 col-sm-9 col-xs-8">
                      <input type="text"  value="{{$setting->name}}" class="form-control" name="name" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 col-sm-3 col-xs-4 control-label">رقم الهاتف</label>
                    <div class="col-md-6 col-sm-9 col-xs-8">
                      <input type="number"   value="{{$setting->phone}}" class="form-control" name="phone" placeholder="">

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-md-3 col-sm-3 col-xs-4 control-label">البريد الالكتروني</label>

                    <div class="col-md-6 col-sm-9 col-xs-8">
                      <input type="email" class="form-control" value="{{$setting->email}}" name="email" id="inputPassword3" placeholder="">


                    </div>
                  </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-3 col-xs-4 control-label"></label>
                        <div class="col-md-6 col-sm-9 col-xs-8">
                            <img style="width: 150px; height: 150px; object-fit: cover;"  src="{{asset('uploads/setting/'.$setting->photo)}}" alt="لا يوجد شعار حاليا" srcset="">
                        </div>
                    </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-md-3 col-sm-3 col-xs-4 control-label">الشعار</label>

                    <div class="col-md-6 col-sm-9 col-xs-8">
                      <input type="file" class="form-control" name="photo" >


                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                  <div class="form-group row">
                                 <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>تحديث</span>
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
