@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Treatment Details
                </header>
                <div class="panel-body">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="adv-table editable-table ">
                        <h3>Treatment setup</h3>
                        Treatment setup is the initial process that allows a physician to plan and deliver a CyberKnife® treatment.

                        For a typical tumor or condition within the skull, a custom-fit plastic mask is made for each patient. This mask, unlike the conventional metal head frame, is noninvasive and painless. With the mask in place, the patient undergoes a CT scan which is then used to precisely plan delivery of radiation to the tumor. In some instances, a MRI scan may also be necessary in order to fully visualize the tumor and nearby anatomy.

                        When tumors outside of the skull are treated, a mask is not made. Instead, a foam body cradle is custom-fit for the individual patient. Some patients require placement of tiny gold markers known as fiducials prior to treatment set-up. These metal fiducials are 3 to 4 mm long and are used to accurately target radiation from the CyberKnife® system. They must be implanted during a short 10- to 15-minute outpatient procedure prior to the CT scan.

                        Unlike frame-based procedures, where the entire process must be performed in a single day, a CyberKnife®patient does not need to wait in the hospital while the treatment plan is being developed. As a result, a patient can go home after setup and return on a separate day for treatment delivery.

                        <h3>Treatment planning</h3>
                        During treatment planning, the physicians and the medical physicist plan the details of radiation delivery to a tumor or other lesion. With traditional frame-based radiosurgical systems, the physician uses their prior experience and intuition to design an effective treatment dose for a specific target.

                        In contrast, CyberKnife® treatment planning utilizes both physician and physicist experience, but also uses high-speed computer programs to develop an optimal pattern of radiation. During the CyberKnife® treatment planning process, once the physician/physicist has determined the volume and dose of radiation, the CyberKnife® computer performs millions of calculations to determine the best radiation delivery plan.

                        CyberKnife's treatment planning system uses the robot's high degree of maneuverability to allow a more even delivery of radiation throughout a tumor than can be achieved by traditional frame-based stereotactic radiosurgery systems.

                        <h3>Treatment delivery</h3>
                        At some point after planning, the patient returns to Capital Health for treatment delivery. CyberKnife®treatment follows the following basic format. The patient is fitted with the custom plastic mask (for tumors or abnormalities of the head) or body cradle (for tumors located outside of the head) and lies on the treatment table. Prior to beginning the actual radiation treatment, the imaging system obtains digital X-rays of the patient position.

                        This information is used to move the linear accelerator to the appropriate position. Subsequently, the robot moves and re-targets the linear accelerator at a large number of positions around the patient. At each position a small radiation beam is delivered.

                        This process is repeated at 50 to 300 different positions around the patient to complete the treatment. At various intervals, the linear accelerator stops and additional pictures are taken of the patient, which allows the CyberKnife® to track and compensate for small amounts of patient movement.

                        This entire process is painless, and it typically takes between 30 to 90 minutes to deliver all radiation beams. Generally, no sedation or anesthesia are used. The patient wears comfortable street clothing during the procedure. The patient treatment plan may specify one to four additional sessions of treatment. In that case, the patient will return to Capital Health the following day or days and treatment delivery will be repeated.
                        <h3>Completion & follow-up</h3>
                        Patients usually leave the hospital and resume their previous activity immediately following the treatment. The doctor may prescribe a steroid (anti-inflammatory) or a medication to prevent nausea following the treatment in some cases.

                        Follow-up imaging is done to monitor the tumor's progress. Patients will be informed of when to return for checkups after treatment is completed.
                    </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection