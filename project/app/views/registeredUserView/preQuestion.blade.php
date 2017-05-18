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
        <form action={{ route("user.show", array("id" => Auth::user()->id)) }} id="premoduleRadio">
            <br>
            <p>We just need to ask you few more questions to help us set the modules up for you.</p>
            <p>Please rate on a scale of 1 to 5 your level of understanding on each module where 5 being Excellent and 1 being None.</p>
            <hr>
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
                                    <input class="big" type="radio" name="m1" value="1">1
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
                                    <input class="big" type="radio" name="m2" value="1">1
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
                                    <input class="big" type="radio" name="m3" value="1">1
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
                                    <input class="big" type="radio" name="m4" value="1">1
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
                                    <input class="big" type="radio" name="m5" value="1">1
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
                                    <input class="big" type="radio" name="m6" value="1">1
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
                                    <input class="big" type="radio" name="m7" value="1">1
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
                                    <input class="big" type="radio" name="m8" value="1">1
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
                                    <input class="big" type="radio" name="m9" value="1">1
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
                                    <input class="big" type="radio" name="m10" value="1">1
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
                                    <input class="big" type="radio" name="m11" value="1">1
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
            <!--<p>Module 1: Demographics & Economics of Spinal Cord Injury</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 2: Spinal cord as a neutral tissue and injury to the nerves</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 3: Structures</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 4: Functions</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 5: SCI mechanisms</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 6: Types of injuries</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 7: Different injuries and their effects on the cord and body</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 8: Chromic effects of spinal cord injury</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 9: Peripheral nerve regeneration</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 10: CNS regeneration</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            <!--<br>-->
            <!--<p>Module 11: Repair therapeutic strategies</p>-->
            <!--<div>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">1-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">2-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">3-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">4-->
            <!--    </label>-->
            <!--    <label class="radio-inline">-->
            <!--        <input class="big" type="radio" name="optradio">5-->
            <!--    </label>-->
            <!--</div>-->
            
            <div class="col-md-12" style="text-align: center">
                <br>
                <button class="whitebrown" style="width: 200px" type="submit">Next</button>
            </div>
        </form>
    </div>

                        
</div>

@endsection
