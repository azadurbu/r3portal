@extends('layouts.adminApp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Treatment Guide
                </header>
                <div class="panel-body">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                    <div class="adv-table editable-table ">
                        <h2>Patient Risk Groups for Prioritizing the Use of Anti-SARS-CoV-2 Therapy</h2>
                        <table><caption>Patient Risk Groups for Prioritizing the Use of Anti-SARS-CoV-2 Therapy </caption> <thead><tr><th scope="col" class="th-center-align">Tier</th><th scope="col" class="th-center-align">Risk Group</th></tr></thead><tbody><tr><td>1</td><td><ul><li>Immunocompromised individuals who are not expected to mount an adequate immune response to COVID-19 vaccination or SARS-CoV-2 infection due to their underlying conditions, regardless of their vaccine status (see Immunocompromising Conditions below); <em>or</em> </li><li>Unvaccinated individuals who are at the highest risk of severe disease (anyone aged ≥75 years or anyone aged ≥65 years with additional risk factors)</li></ul></td></tr><tr><td>2</td><td><ul><li>Unvaccinated individuals who are at risk of severe disease and who are not included in Tier 1 (anyone aged ≥65 years or anyone aged &lt;65 years with clinical risk factors)</li></ul></td></tr><tr><td>3</td><td><ul><li>Vaccinated individuals who are at high risk of severe disease (anyone aged ≥75 years or anyone aged ≥65 years with clinical risk factors) </li><li>Vaccinated individuals who have not received a COVID-19 vaccine booster dose are likely to be at higher risk for severe disease; patients who have not received a booster dose and who are within this tier should be prioritized for treatment.</li></ul></td></tr><tr><td>4</td><td><ul><li>Vaccinated individuals who are at risk of severe disease (anyone aged ≥65 years or anyone aged &lt;65 with clinical risk factors) </li><li>Vaccinated individuals who have not received a COVID-19 vaccine booster dose are likely to be at higher risk for severe disease; patients who have not received a booster dose and who are within this tier should be prioritized for treatment.</li></ul></td></tr></tbody></table>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection