<table style="padding:2px; width: 100%; font-size: 17px">
    <thead>
    <tr style="display: flex; justify-content: center; align-items: center">
        <th>
            <table>
                <tr>
                    <td style="text-align:center;">{{ 'REGIONAL HOSPITAL BAMENDA' }}</td>
                </tr>
                <tr>
                    <td></td>
                </tr>

            </table>
        </th>
        <th>
            <img style="margin: 0; padding: 20px; width: 250px;border-radius: 50%"
                 src="{{ asset('images/5.jpg') }}" alt="logo of the hospital">
        </th>
        <th style="display: flex; justify-content: center">
            <table>
                <tr>
                    <td style="text-align:center;">{{ 'REGIONAL HOSPITAL BAMENDA' }}</td>
                </tr>
                <tr>
                    <td></td>
                </tr>

            </table>
        </th>
    </tr>
    </thead>

    <tbody>

    <tr class=" text-center p-3">
        <td colspan="3" rowspan="1"
            style="border-top: 2px solid darkorange;font-family: 'MV Boli',serif; padding-top: 3px; padding-bottom: 30px"> {{ __('') }} </td>
    </tr>

    <tr>
        <td colspan="3" rowspan="1" >
            <p style="font-weight:bold; text-align:center; text-transform: uppercase">
                Information about the patient
            </p>
            <table  style="border: 1px solid; width:100%;" >
                <tr >
                    <td style="padding-left: 20px; padding-top:5px">Name: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->name }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Address: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->address }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Telephone: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->telephone }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Email: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->email }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Blood Group: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->blood_group }}</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Weight: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->weight }} Cm</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Height: </td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->height }} Kg</td>
                </tr>
                <tr>
                    <td style="padding-left: 20px; padding-top:5px">Date of birth:</td>
                    <td style="padding-left: 20px; padding-top:5px">{{ $patient->date_of_birth }}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <p style="font-weight:bold; text-align:center; text-transform: uppercase; margin-top:20px">
                Medical information
            </p>
            <table  style="border: 1px solid; width:100%;">
                <thead style="text-align:center">
                    <tr style="text-transform: uppercase; text-align:center">
                        <th style="text-align:center">Consultation Name</th>
                        <th  style="text-align:center">Prescribe By</th>
                        <th style="text-align:center">Done By</th>
                        <th style="text-align:center">Exams</th>
                        <th style="text-align:center">Drugs</th>
                        {{--<th style="text-align:center">Date Consultation</th>--}}
                    </tr>
                </thead>
                @foreach($consultations as $consultation)
                    <tr>
                        <td style="padding-left: 5px; padding-top:25px; padding-bottom: 25px; border: 1px solid;">{{ $consultation->name }} </td>
                        <td style="padding-left: 5px; padding-top:25px; padding-bottom: 25px; border: 1px solid;">{{ $consultation->prescribeBy->name }} </td>
                        <td style="padding-left: 5px; padding-top:25px; padding-bottom: 25px; border: 1px solid;">{{ $consultation->doctor->name??'Not Found' }} </td>
                        <td style="padding-left: 5px; padding-top:25px; padding-bottom: 25px; border: 1px solid;">
                            @foreach($consultation->prescribedExams as $exam)
                                <li>{{ $exam->name }} <br> Result: {{ $exam->result }}</li>
                            @endforeach
                        </td>
                        <td style="padding-left: 5px; padding-top:25px; padding-bottom: 25px; border: 1px solid;">
                            @foreach($consultation->prescribedDrugs as $drug)
                                <li>{{ $drug->name }}</li>
                            @endforeach
                        </td>
                    {{--    <td style="padding-left: 5px; padding-top:25px; padding-bottom: 25px; border: 1px solid;">{{ $consultation->date_consultation }} </td>
                    --}}</tr>
                @endforeach
            </table>
        </td>
    </tr>

    </tbody>
    <tfoot>
    <tr>
        <td colspan="3" rowspan="1" style="text-align: center; padding-top: 50px; font-size: 15px">
            Copyright &copy; <?php echo date("Y"); echo " Follow-up All right reserved"; ?>
        </td>
    </tr>
    <tr style="display:flex; justify-content: center; margin: 10px;">
        <td>
            <button class="btn btn-primary"> Print </button>
        </td>
    </tr>
    </tfoot>

</table>
