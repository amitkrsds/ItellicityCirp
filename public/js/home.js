// Parallax Effect Initialization
var rellax = new Rellax('.rellax');

//accordions for mobile

let screenSize = getScreenSize();

if (screenSize < 700) {
    showNeedsContainer();
    showKeyFeaturesContainer();
}

function getScreenSize() {
    return window.innerWidth;
}

function showNeedsContainer() {
    let features = document.getElementById('feature');
    features.innerHTML = '';
    features.innerHTML += `
    <div class="container">
    <div class="section-header">
                     <h1 class="section-title text-center">
                        FirmsData <span>A virtual Data Room for all your needs</span>
                     </h1>
                  </div>
                  <div class="accordion" id="accordionCentral">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="true" aria-controls="cOne">
                        Investment Banks
                      </button>
                    </h2>
                    <div id="cOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               
                               <!-- <h2 class="value-title">
                                  Document Management
                               </h2> -->
                               <p>
                                 M&A  life cycle can be overseen all the more effectively using M&A Virtual Data Rooms, which can assume a key role in dealing with each stage of this lifecycle, beginning from the preliminary stage to a fruitful post-deal closure stage.
                               </p> 
                                 <a class="redirector-mob" href="/mergers-acquisition.html" style="color: black;">Read more</a>
                            </div>
                            <div class="col-md-7">
                               <img src="images/Screen.png" alt="Document Management"
                                  class="value-img" />
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTwo" aria-expanded="false" aria-controls="cTwo">
                        Finance
                      </button>
                    </h2>
                    <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <p>
                                 While VDR is mainly known to be used in Mergers and Acquisitions, primarily making Due Diligence easy, at the same time it plays an important role by making useful data available for Board members.
                              </p>
                              <a class="redirector-mob" href="/board-communications.html" style="color: black;">Read more</a>
                            </div>
                            <div class="col-md-7">
                               <img src="images/Screen.png" alt="Reports"
                                  class="value-img" />
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cThree" aria-expanded="false" aria-controls="cThree">
                        Private Equity
                      </button>
                    </h2>
                    <div id="cThree" class="accordion-collapse collapse" aria-labelledby="hThree" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               <p>
                                 Insolvency and restructuring project management is very complex process and requires high level of confidentiality & compliances
                              </p>
                              <a class="redirector-mob" href="/bankruptcy-restructuring.html" style="color: black;">Read more</a>
                            </div>
                            <div class="col-md-7">
                               <img src="images/Screen.png" alt="Access Security"
                                  class="value-img" />
                            </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="hFour">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cFour" aria-expanded="false" aria-controls="cFour">
                         Legal
                       </button>
                     </h2>
                     <div id="cFour" class="accordion-collapse collapse" aria-labelledby="hFour" data-bs-parent="#accordionCentral">
                       <div class="accordion-body-mob">
                          <div class="row">
                             <div class="col-md-5">
                                <p>
                                 Due Diligence is a process to investigate the facts of any matter to ensure transparent & fair decision making
                               </p>
                               <a class="redirector-mob" href="/diligence.html" style="color: black;">Read more</a>
                             </div>
                             <div class="col-md-7">
                                <img src="images/Screen.png" alt="Access Security"
                                   class="value-img" />
                             </div>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="hFive">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cFive" aria-expanded="false" aria-controls="cFive">
                         Life Sciences
                       </button>
                     </h2>
                     <div id="cFive" class="accordion-collapse collapse" aria-labelledby="hFive" data-bs-parent="#accordionCentral">
                       <div class="accordion-body-mob">
                          <div class="row">
                             <div class="col-md-5">
                                <p>
                                 Securing data in Life science & Healthcare companies is as important as working on mission critical medicines to serve humanity
                               </p>
                               <a class="redirector-mob" href="/life-science.html" style="color: black;">Read more</a>
                             </div>
                             <div class="col-md-7">
                                <img src="images/Screen.png" alt="Access Security"
                                   class="value-img" />
                             </div>
                          </div>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="hSix">
                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cSix" aria-expanded="false" aria-controls="cSix">
                         Real Estate
                       </button>
                     </h2>
                     <div id="cSix" class="accordion-collapse collapse" aria-labelledby="cSix" data-bs-parent="#accordionCentral">
                       <div class="accordion-body-mob">
                          <div class="row">
                             <div class="col-md-5">
                                <p>
                                 Real Estate projects involve a large number of documents sharing with multiple internal departments, contractors, financial institutes and government departments
                               </p>
                               <a class="redirector-mob" href="/real-estate.html" style="color: black;">Read more</a>
                             </div>
                             <div class="col-md-7">
                                <img src="images/Screen.png" alt="Access Security"
                                   class="value-img" />
                             </div>
                          </div>
                       </div>
                     </div>
                   </div>
                </div>
    </div>
    `
}

function showKeyFeaturesContainer() {
    let target = document.getElementById('key-features');
    target.innerHTML = '';
    target.innerHTML += `
    <div class="section-header">
        <h1 class="section-title text-center">
           Key <span>Features</span> List
        </h1>
     </div>
    <div class="accordion" id="accordionKeyFeatures">
        <div class="accordion-item">
          <h2 class="accordion-header" id="kfOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsekfOne" aria-expanded="true" aria-controls="collapsekfOne">
              Onboarding & Training
            </button>
          </h2>
          <div id="collapsekfOne" class="accordion-collapse collapse show" aria-labelledby="kfOne" data-bs-parent="#accordionKeyFeatures">
            <div class="accordion-body-mob">
               <div class="row">
                  <div class="col-md-5">
                     
                     <h2 class="value-title">
                        Document Management
                     </h2>
                     <p>
                        <button class="according-para">EASY DRAG & DROP</button> 
                     </p>
                     <p>
                        <button class="according-para">BULK UPLOAD</button> 
                     </p>
                     <p>
                        <button class="according-para">SUPPORT MULTIPLE FORMATS</button> 
                     <p>
                     </p>
                     <button class="according-para">AUTOMATIC INDEXING</button> 
                     <p>
                     <button class="according-para">PROTECTED ARCHIVING & DELETION</button> 
                     </p>
                     <p>
                        <button class="according-para">GROUP PERMISSIONS</button> 
                     </p>
                  </div>
                  <div class="col-md-7">
                     <img src="images/Screen.png" alt="Document Management"
                        class="value-img" />
                  </div>
               </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="kfFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfFour" aria-expanded="false" aria-controls="collapseKfFour">
              Document Security
            </button>
          </h2>
          <div id="collapseKfFour" class="accordion-collapse collapse" aria-labelledby="kfFour" data-bs-parent="#accordionKeyFeatures">
            <div class="accordion-body-mob">
               <div class="row">
                  <div class="col-md-5">
                     <h2 class="value-title">
                        Document Security
                     </h2>
                     <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown 
                     </p>
                  </div>
                  <div class="col-md-7">
                     <img src="images/Screen.png" alt="Reports"
                        class="value-img" />
                  </div>
               </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="kfFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfFive" aria-expanded="false" aria-controls="collapseKfFive">
              Help Guides
            </button>
          </h2>
          <div id="collapseKfFive" class="accordion-collapse collapse" aria-labelledby="kfFive" data-bs-parent="#accordionKeyFeatures">
            <div class="accordion-body-mob">
               <div class="row">
                  <div class="col-md-5">
                     <h2 class="value-title">
                        Help Guides
                     </h2>
                     <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown 
                     </p>
                  </div>
                  <div class="col-md-7">
                     <img src="images/Screen.png" alt="Reports"
                        class="value-img" />
                  </div>
               </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="kfTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfTwo" aria-expanded="false" aria-controls="collapseKfTwo">
              Reports
            </button>
          </h2>
          <div id="collapseKfTwo" class="accordion-collapse collapse" aria-labelledby="kfTwo" data-bs-parent="#accordionKeyFeatures">
            <div class="accordion-body-mob">
               <div class="row">
                  <div class="col-md-5">
                     <h2 class="value-title">
                        Reports
                     </h2>
                     <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown 
                     </p>
                  </div>
                  <div class="col-md-7">
                     <img src="images/Screen.png" alt="Reports"
                        class="value-img" />
                  </div>
               </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="kfThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKfThree" aria-expanded="false" aria-controls="collapseKfThree">
              Access Security
            </button>
          </h2>
          <div id="collapseKfThree" class="accordion-collapse collapse" aria-labelledby="kfThree" data-bs-parent="#accordionKeyFeatures">
            <div class="accordion-body-mob">
               <div class="row">
                  <div class="col-md-5">
                     <h2 class="value-title">
                        Access Security
                     </h2>
                     <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown 
                     </p>
                  </div>
                  <div class="col-md-7">
                     <img src="images/Screen.png" alt="Access Security"
                        class="value-img" />
                  </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    
    `
}