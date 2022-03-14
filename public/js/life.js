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
                        <span> FirmsData, </span> securing critical data in Life Science & Healthcare industry
                     </h1>
                  </div>
                  <div class="accordion" id="accordionCentral">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="hOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="true" aria-controls="cOne">                        
                      How Virtual Data Room (VDR) in Life Science & Healthcare help:
                      </button>
                    </h2>
                    <div id="cOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                               <ul>
                                 <li> It reduces the chance of Data security breach </li>
                                 <li> VDR in healthcare also reduces hassles of organizing all data at one place </li>
                                 <li> Using Q&A module, members can quickly clarify their doubts based on data </li>
                                 <li> Role & IP based data access can be provided to members  </li>
                                 <li> VDR in life science makes due diligence easy and helps in decision making  </li>
                                 <li> Like other industries, VDR in healthcare can be used in M&A, IPO, Fund Raising etc </li>
                                 <li> It makes a secure & controlled collaboration between strategic partners </li>
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
                      FirmsData inbuilt features makes data sharing while Board Communication easy and secure:
                      </button>
                    </h2>
                    <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo" data-bs-parent="#accordionCentral">
                      <div class="accordion-body-mob">
                         <div class="row">
                            <div class="col-md-5">
                              <ul>
                                 <li> Easy drag & drop </li>
                                 <li> Intutive user interface </li>
                                 <li> Single data or bulk upload  </li>
                                 <li> Support multiple formats </li>
                                 <li> Automatic indexing  </li>
                                 <li> Protected archiving & deletion </li>
                                 <li> Group permissions  </li>
                                 <li> User activity report  </li>
                                 <li> Complete audit trails  </li>
                                 <li> High level customized reports  </li>
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
                      FirmsData VDR in Healthcare & Life Science ensures high level of security and compliances:
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