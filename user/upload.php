<h4>Daftar Pekerjaan</h4>
                        <form action="simpan_lamaran.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                   
                                <div class="col-md-12">
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
                                                aria-describedby="inputGroupFileAddon03" name="cv">
                                            <label class="custom-file-label" for="inputGroupFile03">Upload Lamaran</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                    <input class="boxed-btn3 w-100" type="submit" name="submit" value="Kirim">
                                    </div>
                                </div>
                            </div>
                        </form>