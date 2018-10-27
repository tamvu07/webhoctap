<?php require_once("header_student.php");?>


    <div class="main-container container" id="main-container">            
      <!-- post content -->
      <div class="blog__content mb-72">
        <h1 class="page-title">Shortcodes</h1>      
        
        <div class="row section-buttons mt-40">
          <div class="col-md-4">
            <div>
              <a href="#" class="btn btn-sm btn-color">
                <span>Small Button</span>
              </a>
            </div>
            <div>
              <a href="#" class="btn btn-lg btn-color">
                <span>Large Button</span>
              </a>
            </div>              
          </div>
          <div class="col-md-4">
            <div>
              <a href="#" class="btn btn-sm btn-dark">
                <span>Small Button</span>
              </a>
            </div>
            <div>
              <a href="#" class="btn btn-lg btn-dark">
                <span>Large Button</span>
              </a>
            </div>              
          </div>
          <div class="col-md-4">
            <div>
              <a href="#" class="btn btn-sm btn-light">
                <span>Small Button</span>
              </a>
            </div>
            <div>
              <a href="#" class="btn btn-lg btn-light">
                <span>Large Button</span>
              </a>
            </div>              
          </div>
        </div>        

        <!-- Forms -->
        <div class="title-wrap">
          <h3>Form Elements</h3>
        </div>

        <div class="row mb-30">
          <div class="col-md-6">

            <input name="text" type="text" placeholder="Input with placeholder">
            <input name="password" id="password" type="password" placeholder="Password input">
            <textarea placeholder="Textarea" rows="3"></textarea>

            <label for="input-label">Input With Label</label>
            <input name="name" id="input-label" type="text">

          </div> <!-- end col -->

          <div class="col-md-6">

            <select>
              <option selected="" value="default">Select an option</option>
              <option value="green">Green</option>
              <option value="black">Black</option>
              <option value="white">White</option>
            </select>

            <div class="row mt-30">

              <div class="col-md-6 mb-30">
                <h6>Radio Buttons</h6>
                <ul class="radio">
                  <li>
                    <input type="radio" class="radio-unput" name="radio" id="radio1" value="radio1" checked="checked">
                    <label for="radio1">Radio 1</label>
                  </li>
                  <li>
                    <input type="radio" class="radio-unput" name="radio" id="radio2" value="radio2">
                    <label for="radio2">Radio 2</label>
                  </li>
                  <li>
                    <input type="radio" class="radio-unput" name="radio" id="radio3" value="radio3">
                    <label for="radio3">Radio 2</label>
                  </li>
                </ul>
              </div>

              <div class="col-md-6 mb-30">
                <h6>Checkboxes</h6>
                <ul class="checkbox">
                  <li>
                    <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox1" value="1" checked="checked">
                    <label for="checkbox1">Checkbox 1</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox2" value="2">
                    <label for="checkbox2">Checkbox 2</label>
                  </li>
                  <li>
                    <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox3" value="3">
                    <label for="checkbox3">Checkbox 3</label>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- Tabs -->
        <div class="title-wrap">
          <h3>Tabs</h3>
        </div>
        <div class="row mb-50">
          <div class="col-lg-8">
            <div class="tabs"> 
              <ul class="tabs__list">
                <li class="tabs__item tabs__item--active">
                  <a href="#tab-1" class="tabs__url tabs__trigger">Flexible</a>
                </li>
                <li class="tabs__item">
                  <a href="#tab-2" class="tabs__url tabs__trigger">WordPress</a>
                </li>
                <li class="tabs__item">
                  <a href="#tab-3" class="tabs__url tabs__trigger">Theme</a>
                </li>
              </ul> <!-- end tabs -->
            </div>
            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger">             
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.</p>
              </div>
              <div class="tabs__content-pane" id="tab-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.</p>
              </div>
              <div class="tabs__content-pane" id="tab-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia obcaecati, nostrum error odio illum, id quisquam assumenda quo eos.</p>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- end post content -->
    </div> <!-- end main container -->


<?php require_once("footer.php");?>