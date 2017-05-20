@extends('layouts.preQuestionMaster')

@section('title')
	Premodule Questionaire
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>You're almost done!</h2>
@endsection

@section('content')
<div class="container-fluid">
    <div class="col-md-12 basicFontStyle" style="text-align:center">
       
        <br>
        <p class="text1">We would like to ask you a few more questions to help us set up the modules to your preferences.
        <br>Please rate on a scale of 1 to 5 your level of understanding on each module where 5 being Excellent and 1 being None.</p>
        <div class="col-md-12" style="text-align: center">
            <a href={{ route("user.show", array("id" => Auth::user()->id)) }}><button class="whitebrown" style="width: 150px;float:right;margin-right:50px" type="submit">Skip</button></a>
            <br><br><br>
        </div>
        {{ Form::model($user, array('method' => 'PUT', 'route' => array('user.premodule', Auth::user()->id)))}}
        <div class="col-md-12">
            <table class="d">
                <tr>
                    <th class="b3">
                        
                    </th>
                    <th class="b4">
                        <label style="float:left;margin-left:20px">None</label> 
                        <label style="margin-left:30px">Poor </label> 
                        <label style="margin-right:35px;margin-left:50px">Average</label>
                        <label style="margin-right:40px">Good</label>
                        <label style="margin-left:5px;margin-right:5px">Excellent</label>
                    </th>
                </tr>
                <tr>
                    <td class="b3">Module 1: Demographics & Economics of Spinal Cord Injury</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m1" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m1" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m1" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m1" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m1" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 2: Spinal cord as a neutral tissue and injury to the nerves</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m2" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m2" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m2" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m2" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m2" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 3: Structures</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m3" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m3" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m3" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m3" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m3" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 4: Functions</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m4" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m4" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m4" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m4" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m4" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 5: SCI mechanisms</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m5" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m5" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m5" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m5" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m5" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 6: Types of injuries</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m6" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m6" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m6" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m6" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m6" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 7: Different injuries and their effects on the cord and body</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m7" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m7" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m7" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m7" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m7" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 8: Chromic effects of spinal cord injury</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m8" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m8" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m8" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m8" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m8" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 9: Peripheral nerve regeneration</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m9" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m9" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m9" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m9" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m9" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 10: CNS regeneration</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m10" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m10" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m10" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m10" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m10" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="b3">Module 11: Repair therapeutic strategies</td>
                    <td class="b3">
                        <div>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m11" value="1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m11" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m11" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m11" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input class="big" type="radio" name="m11" value="5">5
                            </label>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-md-12" style="text-align: center">
            <br>
            <button class="whitebrown" style="width: 200px" type="submit">Next</button>
        </div>
        {{ Form::close() }} 
    </div>

                        
</div>

@endsection
