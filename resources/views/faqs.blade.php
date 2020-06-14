@extends('layouts.app')
@section('content')
<main class="main-content">
            <section class="page_title" style="background: url(../assets/image/resources/breadcrumb2.jpg) !important;">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 d-flex">
                        <div class="content_box">
                          
                           <h1 style="
                           background: linear-gradient(to right, #30CFD0 0%, #cb42f5 100%);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;">Faq's</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--------doctors-------->
            <section class="faq_all">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div id="accordiontwo">
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingOne">
                                 <h5 class="mb-0">
                                    <button class="faq_btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Cómo puedo pedir cita en el taller?<span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordiontwo">
                                 <div class="card-body">
                                    Puedes realizar una cita previa llamando al teléfono de contacto o a través de nuestro correo electrónico. Más adelante añadiremos la opción de pedir cita a través de la web. </div>
                              </div>
                           </div>
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingTwo">
                                 <h5 class="mb-0">
                                    <button class="faq_btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Cómo puedo saber el estatus de mi reparación?<span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordiontwo">
                                 <div class="card-body">
                                    Cuando realicemos la factura del servicio le será proporcionada una cuenta de usuario y una contraseña con la que podrá acceder a su panel de cliente y consultar el estado de su reparación. </div>
                              </div>
                           </div>
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingThree">
                                 <h5 class="mb-0">
                                    <button class="faq_btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Puedo realizar una cita presencial en el taller?<span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordiontwo">
                                 <div class="card-body">
                                   Lo recomendable en la situación actual es realizar una cta previa de forma telemática, no obstante, siempre que se respeten las normas de seguridad usted podrá visitar el taller para realizar una cita.  </div>
                              </div>
                           </div>
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingfour">
                                 <h5 class="mb-0">
                                    <button class="faq_btn collapsed" data-toggle="collapse" data-target="#faqstyleone" aria-expanded="true" aria-controls="faqstyleone">
                                    ¿Cuál es el horario del taller?  <span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="faqstyleone" class="collapse " aria-labelledby="headingfour" data-parent="#accordiontwo">
                                 <div class="card-body">
                                   El horario del taller es de Lunes a Viernes de 9 de la mañana a 6 de la tarde. Para más información consulte nuestra sección "Contacto" </div>
                              </div>
                           </div>
                           
                          
                           
                        </div>
                     </div>
                  </div>
               </div>
            </section>
          
            <!-------------main-centent-end--------------->
         </main>
         @endsection