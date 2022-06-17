@extends('layouts.app')
@section('specialtie_open','menu-open')
@section('specialties','active')
@section('specialtie_create','active')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-11">
                <!-- Horizontal Form -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">
                        <img src="{{asset('uploads/list_64px.png')}}" class="image-title-card" alt="specialite">
                            تعديل بيانات  التخصص
                         </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('specialtie.update',$specialtie->id)}}" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body custom-design">

                            {{-- == Input Specialtie Name == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم التخصص </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                <input required type="text" class="form-control" value="{{$specialtie->specialtie_name}}" placeholder="أدخل اسم التخصص من فضلك" name="specialtie_name" >
                                </div>
                            </div>

                            {{-- == Select Medical Center == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">المركز الطبي  </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                     <select name="medical_center_id" id="" class="form-control" required>
                                        <option value="" disabled>إختر المركز الطبي من فضلك</option>
                                        <option value="{{$specialtie->MedicalCenter_Fun_Relation->id}}" selected> {{$specialtie->MedicalCenter_Fun_Relation->name}}</option>
                                         @foreach ($medical_centers as $m_c)
                                        <option value="{{$m_c->id}}">{{$m_c->name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>

                            {{-- == Submit Botton == --}}
                              <div class="form-group row">
                                 <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>تحديث</span>
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>

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


