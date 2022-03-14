let screenSize = getScreenSize();

if (screenSize < 700) {
    showFeaturesContainer();
    showDemoContainer();
}

function getScreenSize() {
    return window.innerWidth;
}

function showFeaturesContainer() {
    let features = document.getElementById('feature');
    features.innerHTML = '';
    features.innerHTML += `
    <div class="container">
    <div class="section-header">
                     <h1 class="section-title text-center">
                        <span> FirmsData, </span> making Bankruptcy & Restructuring projects easy and secure
                     </h1>
                  </div>
                  <div class="accordion" id="accordionCentral">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="true" aria-controls="cOne">                        
                      
How Virtual Data Room (VDR) in Bankruptcy and Restructuring help:
                      </button>
                    </h2>
                    <div id="cOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               <ul>
                                 <li> VDR for bankruptcy provides single secure interface to fetch all  required data </li>
                                 <li> VDR in restructuring helps in sharing data access to intended users onl </li>
                                 <li> Using Q&A module, members can quickly clarify their doubts based on data </li>
                                 <li> Role & IP based data access can be provided to members  </li>
                                 <li> VDR also helps buyers to do quick due diligence on their decisions </li>
                                 <li> Features like advance search and auto indexing helps users to quickly find data </li>
                                 <li> It makes a secure & controlled collaboration between all parties involved in the process  </li>
                                 </ul>
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
                      Things to consider while selecting Virtual Data Room for Bankruptcy & Restructuring:
                      </button>
                    </h2>
                    <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                                 <li> VDR provider should have subject matter expertise in bankruptcy & restructurin </li>
                                 <li> Virtual data room for insolvency should have easy to use interface </li>
                                 <li> VDR platform should follow government guidelines  </li>
                                 <li> VDR provider should have previous experience in managing insolvency projects  </li>
                                 <li> It should provide comprehensive reporting & communication system </li>
                                 <li> Data administrator should have complete control on data and its users </li>
                                 <li> VDR system should be fully secure &  scalable to be able to use by multiple parties </li>
                                 </ul>
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
                      
Features of FirmsData Virtual Data Room for Bankruptcy & Restructuring:
                      </button>
                    </h2>
                    <div id="cThree" class="accordion-collapse collapse" aria-labelledby="hThree" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                              <li> Time and ip access restriction </li>
                              <li> Granular user permissions </li>
                              <li> Two-factor authentication  </li>
                              <li> In transit & at rest encryption </li>
                              <li> 256 bit ssl encryption </li>
                              <li> Secure fence view </li>
                              <li> Dynamic watermarks </li>
                              <li> Remote shred </li>
                              <li> Secure spreadsheet viewer </li>
                              <li> Download restrictions </li>
                              <li> Archiving control </li>
                              <li> Iso:27001 security complainces </li>
                              <li> Highly secure amazon servers </li>
                              <li> Disaster Recovery </li>
                                 </ul>
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

function showDemoContainer() {
    let demo = document.getElementById('demo');
    demo.innerHTML = '';
    demo.innerHTML += `
    <span style="color: #fff; font-size: 17px; margin-bottom: 7px;"> Get a demo </span>
    <a href="index.html">
    <button class="customBtn" style="background-color: white; border: none; color: #000;"> Start free trial </button>
    </a>  
    `;

}