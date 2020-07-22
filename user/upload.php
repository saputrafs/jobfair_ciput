<h4>Daftar Pekerjaan</h4>
                        <form action="simpan_lamaran.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                   
                                <!-- <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" id="inputGroupFileAddon03"><i
                                                    class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="hidden" name="id_loker" value="<?= $idl ?>">
                                            <input type="hidden" name="id_user" value="<?= $id ?>">
                                            <input type="file" class="custom-file-input" id="inputGroupFile03"
                                                aria-describedby="inputGroupFileAddon03" name="cv" required>
                                            <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" id="inputGroupFileAddon02"><i
                                                    class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="custom-file">  
                                        <input type="file" class="custom-file-input" id="inputGroupFile02"
                                                aria-describedby="inputGroupFileAddon02" name="ktp" required >
                                            <label class="custom-file-label" for="inputGroupFile02">Upload KTP</label>
                                        </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" id="inputGroupFileAddon01"><i
                                                    class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="custom-file">  
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01" name="ijazah" required >
                                            <label class="custom-file-label" for="inputGroupFile01">Upload Ijazah</label>
                                        </div>
                                </div>
                                </div>
                               
                                <div class="col-md-12">
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" id="inputGroupFileAddon0"><i
                                                    class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="custom-file">  
                                        <input type="file" class="custom-file-input" id="inputGroupFile0"
                                                aria-describedby="inputGroupFileAddon0" name="sertifikat" required>
                                            <label class="custom-file-label" for="inputGroupFile0">Upload Sertifikat</label>
                                        </div>
                                </div>
                                </div> -->
    <input type="hidden" name="id_loker" value="<?= $idl ?>">
    <input type="hidden" name="id_user" value="<?= $id ?>">
            <div class="col-12">
                <div class="form-group">
                  <br />
                  <label>Upload CV</label>
                  <input class="form-control" name="cv" type="file" required>
                </div>

                <div class="form-group">
                  <br />
                  <label>Upload Lamaran</label>
                  <input class="form-control" name="lamaran" type="file" required>
                </div>
             
                <div class="form-group">
                  <br />
                  <label>Upload Ijazah</label>
                  <input class="form-control" name="ijazah" type="file" required>
                </div>
              
                <div class="form-group">
                  <br />
                  <label>Upload Sertifikat</label>
                  <input class="form-control" name="sertifikat" type="file" required>
                </div>
              </div>
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                    <input class="boxed-btn3 w-100" type="submit" name="submit" value="Kirim">
                                    </div>
                                </div>
                            </div>
                        </form>