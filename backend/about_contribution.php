    <?php $Contribution = getContribution(); ?>
                 <form class="form-horizontal" method="POST" action="inc/about_process">
                  <?php foreach($Contribution as $getContributionList){ ?>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Summary</label>
                            <div class="col-sm-6">
                             <textarea name="summary" id="summary" class="form-control" rows="3" style="resize:vertical;" ><?php echo $getContributionList['summary']; ?></textarea>

                            </div>
                          </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                             <input type="hidden" name="page" id="page" value="Contribution to National Development" class="form-control">
                            </div>
                          </div>

                            <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-6">
                             <textarea name="description" id="description" class="form-control" rows="7" style="resize:vertical;" ><?php echo html_entity_decode($getContributionList['description']); ?></textarea>
                            </div>
                          </div>




                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success">Update</button>


                            </div>
                          </div>
													 <?php } ?>
                        </form>
