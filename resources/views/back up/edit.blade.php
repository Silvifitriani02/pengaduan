<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                EDIT DATA
                </div>
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nik</label>
                            <input type="text" name="nik" class="form-control" placeholder="pengaduan" value=" {{ $pengaduan->nik }}">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="tgl_pengaduan"> {{ $pengaduan->tgl_pengaduan }}
 
                             @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <input type="text" name="isi_laporan" class="form-control" placeholder="pengaduan" value=" {{ $pengaduan->isi_laporan }}">
 
                            @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" id= "inputGroupFile" class="form-control" value="{{ $pengaduan->foto }}"></input>
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>