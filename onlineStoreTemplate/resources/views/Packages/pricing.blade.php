@extends('layouts.app')

@section('content')

    <div class="hero" style=" background-image: url({{asset('/images1/sell.jpg')}});
        ">

        <div class="inner">
            <h1>Oz Property Market Packages</h1>
        </div>
    </div>

    <div class="container bg-white p-5" style="overflow-x: scroll;">
        <p>Here is a list of our packages and features: </p>
    </div>

    <div class="container bg-white p-5" style="overflow-x: scroll;" id="Residential_Sale">

        <table class="table1  ">
            <tbody>
            <tr>
                <td colspan="6"
                    style="width:448.0pt;border:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:29.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#fff;">Residential Sale Packages</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Features&nbsp;</span></strong></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;"><a href="order/1/99" style="color:#e4002b">Basic</a> </span></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;"><a href="order/2/590" style="color:#e4002b">Professional</a></span></strong>
                    </p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;"><a href="order/3/690" style="color:#e4002b">Gold </a></span></strong>
                    </p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;"><a href="order/4/1490"
                                                                               style="color:#e4002b">Platinum</a></span></strong>
                    </p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;"><a href="order/5/2490"
                                                                               style="color:#e4002b">Ultimate</a></span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Photography</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('Once you’ve purchased one of our campaigns with Professional Photography we will contact you directly by email to find a suitable day and time for photo shooting. We supply specialist photographers. Our photographer will take the image and send the edited images to you and you can upload them onto your listing.')"></i>
                        </strong></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>self taken</span>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>self taken</span>
                    </p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>self taken</span>
                    </p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>Professional Photography</span>
                    </p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>Professional Photography</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:33.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Property Brochures</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('Every listing comes with a free coloured template for A4 property brochures. The first 6 photographs in the online will be the first 6 images used in the brochure. This will be automatically generated when you list your house. The description text you used on your ad will also be the text on your brochure. To edit the text or rearrange your photos simply login to your account and edit or rearrange your photos in your property dashboard.\n'+
'You are able to self-print an unlimited amount of these brochures yourself from home.')"></i></strong></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:33.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>Self printed (Unlimited)</span>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:33.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>Self printed (Unlimited)</span>
                    </p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:33.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>Self printed (Unlimited)</span>
                    </p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:33.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>50 X A4 Gloss Brochures (Delivered)</span>
                    </p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:33.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>50 X A4 Gloss Brochures (Delivered)</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Buyer Enquiry Forwarding</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('All future buyer/tenant enquiries are forwarded when you sign up with us to the e-mail address you have. All Australian-wide enquiries come to our email server, which then distributes each enquiry to the appointed property owner, to answer any of their questions directly via email, phone call or text message or to arrange a time for them to view the property.')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <!--tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Buyer phone connection service</span></strong></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Customer service</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('Every step of the way, we\'re here to help you. You can contact us if you need any assistance or request a call back by calling …\n'+
'We will provide the number after \n'+
'More than likely, the answer to your question will be given on our FAQ page below: \n'+
'Or, you can also contact our support team at \n'+
'Email: Ozpropertymarket@gmail.com')"></i></strong></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Manage or edit your Listing 24/7</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('To allow you to build, edit & update your listing whenever you want, we offer a custom designed, easy to use application. \n'+
'You\'ll get led to your property dashboard after listing your property. You can edit, upload or alter your property status to \'Available or Offered or Sold\'.\n')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:63.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Unlimited wording for your user description</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('With as much text as you want, feel free to tell everyone how awesome your property is.\n'+
'Bullet points are the most strategic tactic when advertising the house, and short paragraphs turn out the best. \n'+
'It helps customers to skim through the text to find the points they are most interested in and looking for. \n')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:63.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:63.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:63.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:63.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:63.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Add Open For Inspection times</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('In real estate agents and private sellers, open for inspections or \'Open Home\' is commonly used, as they are a perfect opportunity to bring a variety of potential buyers into the property at any given time. \n'+
'By logging in to your property dashboard and heading to the Open Times section, you can add or delete Open Times to your listing at any time and set your own day and time for your property.\n')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Attach your own Floor Plan</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('You can now add this to your listing if you have a floor plan to give buyers a clearer understanding of your home\'s layout. \n'+
'Fast Tip: Simply draw & calculate one by hand (rough estimate) if you don\'t have a floor plan, and then scan or take a screenshot of your hand drawn floor plan.\n'+
' Visit Www.boxbrownie.com/au/floor-schedules \n'+
'For a small fee they can design your layout \n'+
'You can list your property first and later add the floor plan.')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Listing on domain.com.au (standard listing)</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('As a regular listing, the property will be listed on domain.com.au. \n'+
'Domain.com.au is part of the Fairfax Media Network and is one of the leading property vendor destinations in Australia. It has unique suburban info, a world-leading \'radar\' search feature, home notifications from new buyers, listing of sold homes, sales history, and also the leading property search app on the Iphone in Australia.\n'+
'More than 3 million unique users visit Domain.com.au every month and make more than 228 million impressions of the website. \n'+
'Each year, Domain is rising and is one of the real estate industry\'s dominant real estate portals.')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;"> &nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>

            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Attach your video to your Listing</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('To give purchasers a more immersive look at your home, you can now add videos to your property listing. \n'+
'You will need to visit Youtube.com to create a free account to upload your video to create a connection that can be shared, if you have a video for your property to do this. Copy and paste a YouTube link into your listing.\n'+
'If you have developed a professional video via a videographer or photographer, they should be able to send you an email with a YouTube link which you can then upload. \n'+
'With your listing, your video will appear on realestate.com.au, domain.com.au, and all other video-supporting websites.')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:60.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">For Sale sign board</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('Our corflute For Sale sign Boards weatherproof, light, robust, and can be attached to a fence or timber stakes. Timber stakes can be bought separately from the nearest hardware store or Bunnings. When your property sells, you will also get a free \'sold\' sticker. With each of those signs for each installation, we also supply zippie ties & screws.')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:60.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:60.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:60.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">1 x For Sale sign board (corfiute 700x580)</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:60.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">1 x For Sale sign board (corfiute 1800x1200)</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:60.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">1 x For Sale sign board (corfiute 1800x1200)</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Open For Inspection Flags</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('Your Open Home Flags are a good way to advertise your home and make it easily visible to customers passing by or looking for directional signs for your \'Open Home\' that can be posted at the front of your property or at your street entrance. The best thing about selling your own home is that you can have open homes that are really long, It makes it much easier for buyers to see your property. You can advertise your online Open Home. (e.g. View from 7am to 1pm on Saturday)')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">2x Open Home directional signs</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('You will receive 2 x double-sided \'Open Home\' directional signs that can be positioned at the front of your property or at the end of your street to help market your Open Home to potential buyers and passers by.\n'+
'There are used by Real Estate Agents regularly during Open Home’s on weekend’s or throughout the week.\n')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">&apos;SOLD&apos; sticker and zipped ties</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('When installing your \'For Sale\', cable ties & screws are used. They can be used to attach the sign to any form of fencing, balcony, or can be used to fix the sign to stakes in timber.\n'+
'Placing your SOLD sticker on your sign is one of the BEST parts of selling your house, knowing you have just potentially saved yourself thousands.\n')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Extended customer phone support</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('Schedule a time for you to be contacted by one of our team and answer any questions about the best ways to market your property\n'+
'TIP: \n'+
'Check out helpful Tips page to see if there is anything additional you could be doing to help a buyer spark interest.\n')"></i></strong>
                    </p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <!--tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Vendor advocacy &amp; Negotiation advice (2x hours)</span></strong></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:  0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:90.55pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:  #f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:100.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">30-DAYS FACEBOOK AND INSTAGRAM SPONSORED ADVERTISING</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('A hugely missed opportunity with most Real Estate Agents today is Facebook & social media marketing. There are 30 days of Facebook & Instagram marketing via \'paid ads\' included in your Ultimate campaigns (paid ads). This will promote your property to anyone who has a Facebook or Instagram account with a direct connection, pictures, information & contact number.')"></i></strong>
                    </p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="font-size:16px;color:black;">&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:100.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>

                </td>
                <td style="width:49.5pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:100.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>

                </td>
                <td style="width:78.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:100.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>

                </td>
                <td style="width:92.45pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:100.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>

                </td>
                <td style="width:88.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:100.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>

                </td>
            </tr>
            @if(!\Illuminate\Support\Facades\Auth::guest())
                @if(\Illuminate\Support\Facades\Auth::user()->role < 2)
                    <tr>
                        <td colspan="6"
                            style="width:90.55pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:  #e4002b50;padding:0cm 5.4pt 0cm 5.4pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                                <strong><span style="font-size:16px;color:#e4002b;">Get 30-Days sponsorship on our website slideshow your property for Adiitional $ 99 ONLY!</span><i
                                        class="fa fa-question-circle mx-1" data-toggle="modal"
                                        data-target="#exampleModal"
                                        onclick="setDetails('Advertise your property at the top of our page for Tens of Thousands to view and inquire. This unique feature is a great way to bring attention of many genuine buyers to inquire and promote their interest.')"></i></strong>
                            </p>
                        </td>


                    </tr>
                @endif
            @endif

            <tr>
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;">Price&nbsp;</span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/1/99" class="special-link"><span style="color:white;">$99</span></a></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/2/590" class="special-link"><span style="color:white;">$590</span></a></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/3/690" class="special-link"><span style="color:white;">$690</span></a></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/4/1490" class="special-link"><span style="color:white;">$1490</span></a></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/5/2490" class="special-link"><span style="color:white;">$ 2490</span></a></p>
                </td>
            </tr>
            <tr style="display: none">
                <td style="width:90.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;"><a class="special-link" href=" ">Aplly</a></span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;"><a class="special-link">Aplly</a></span></p>
                </td>
                <td style="width:49.5pt;border-top:none;border-left:none;border-bottom:  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:  #e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;"><a class="special-link">Aplly</a></span></p>
                </td>
                <td style="width:78.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;"><a class="special-link">Aplly</a></span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;"><a class="special-link">Aplly</a></span></p>
                </td>
                <td style="width:88.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;"><a class="special-link" href="">Aplly</a></span></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br/>
    <br/>

    <div class="container bg-white p-5" style="overflow-x: scroll;" id="Residential_Rent">

        <table class="table1  ">
            <tbody>
            <tr>
                <td colspan="3"
                    style="width:279.0pt;border:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:29.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;">Residential Rental Packages</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;">Features&nbsp;</span></strong></p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/6/69" style="color:#e4002b">Standard</a></span></strong>
                    </p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/7/199" style="color:#e4002b">Professional</a></span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Manage Your Listing 24/7</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:42.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:36.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Fully Signed PDF Applications</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Rental Re-listing Guarantee</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Extended Customer Support</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">&apos;For Lease&apos; Board</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>&nbsp;</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
            </tr>
            <!--tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:54.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">SMS &nbsp;Alerts &amp; Enquiry Forwarding</span></strong></p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:54.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:54.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Panel of Experts</span></strong></p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:102.0pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:  #f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:62.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Listing on domain.com.au (standard listing)</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>

                </td>
                <td style="width:75.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:102.0pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:102.0pt;border:solid windowtext 1.0pt;border-top:  none;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;">Price&nbsp;</span></p>
                </td>
                <td style="width:75.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/6/69" class="special-link"><span style="color:white;">$69</span></a></p>
                </td>
                <td style="width:102.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/7/199" class="special-link"><span style="color:white;">$199</span></a></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br/>
    <br/>

    <div class="container bg-white p-5" style="overflow-x: scroll;" id="Commercial_Sale">

        <table class="table1">

            <tbody>
            <tr>
                <td colspan="4"
                    style="width:293.85pt;border:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:29.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;">Commercial Sale Packages</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;">Features&nbsp;</span></strong></p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/8/99" style="color:#e4002b">Basic</a></span></strong>
                    </p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/9/390" style="color:#e4002b">Gold</a></span></strong>
                    </p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:21.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/10/790"
                                                                               style="color:#e4002b">Professional</a></span></strong>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Printable Brochures</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:41.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Manage Your Listing 24/7</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:41.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:41.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <!--tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">SMS Alerts &amp; Enquiry Forwarding</span></strong></p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Panel of Experts</span></strong></p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Extended Customer Support</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">&apos;For Sale&apos; Board</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:159.25pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:  #f2f2f2;padding:0cm 5.4pt 0cm 5.4pt;height:62.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">List on commercialrealestate.com.au</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:42.15pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.25pt;">

                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>

                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>

                </td>
                <td style="width:92.45pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:62.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>

                </td>
            </tr>
            @if(!\Illuminate\Support\Facades\Auth::guest())
                @if(\Illuminate\Support\Facades\Auth::user()->role < 2)
                    <tr>
                        <td colspan="4"
                            style="width:90.55pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:  #e4002b50;padding:0cm 5.4pt 0cm 5.4pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                                <strong><span style="font-size:16px;color:#e4002b;">Get 30-Days sponsorship on our website slideshow your property for Adiitional $ 99 ONLY!</span><i
                                        class="fa fa-question-circle mx-1" data-toggle="modal"
                                        data-target="#exampleModal"
                                        onclick="setDetails('')"></i></strong>
                            </p>
                        </td>


                    </tr>
                @endif
            @endif
            <tr>
                <td style="width:159.25pt;border:solid windowtext 1.0pt;border-top:  none;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;">Price&nbsp;</span></p>
                </td>
                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/8/99" class="special-link"><span style="color:white;">$99</span></a></p>
                </td>

                <td style="width:42.15pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/9/390" class="special-link"><span style="color:white;">$390</span></a></p>
                </td>
                <td style="width:92.45pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#e4002b;padding:0cm 5.4pt 0cm 5.4pt;height:15.0pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/10/790" class="special-link"><span style="color:white;">$790</span></a></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/>
    <br/>

    <div class="container bg-white p-5" style="overflow-x: scroll;" id="Commercial_Rent">

        <table class="table1  ">

            <tbody>
            <tr>
                <td colspan="4"
                    style="width:299.85pt;border:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:28.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;">Commercial Rental Package</span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;">Features</span></strong></p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/11/69" style="color:#e4002b">Basic</a></span></strong>
                    </p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/12/199"
                                                                               style="color:#e4002b">Gold</a></span></strong>
                    </p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/13/399"
                                                                               style="color:#e4002b">Professional</a></span></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Manage Your Listing 24/7</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <!--tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:58.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">SMS &nbsp;Alerts &amp; Enquiry Forwarding</span></strong></p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  58.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  58.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:33.35pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Fully Signed PDF Applications</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  33.35pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  33.35pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Printable Brochures</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>

            <!--tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Panel of Experts</span></strong></p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Extended Customer Support</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>

            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">&apos;For Lease&apos; Board</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.75pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>&nbsp;</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid #000 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:60.95pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Listing on commercialrealestate.com.au</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.75pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:60.95pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">&nbsp;</span></strong></p>
                </td>
                <td style="width:109.55pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:60.95pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">&nbsp;</span></p>
                </td>
                <td style="width:109.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  35.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;">Price</span></p>
                </td>
                <td style="width:80.75pt;border:solid windowtext 1.0pt;border-left:  none;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/11/69" class="special-link"><span style="color:white;">$69</span></a></p>
                </td>
                <td style="width:80.75pt;border:solid windowtext 1.0pt;border-left:  none;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/12/199" class="special-link"><span style="color:white;">$199</span></a></p>
                </td>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-left:  none;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/13/399" class="special-link"><span style="color:white;">$399</span></a></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br/>
    <br/>

    <div class="container bg-white p-5" style="overflow-x: scroll;" id="Business_Sale">

        <table class="table1  ">


            <tbody>
            <tr>
                <td colspan="2"
                    style="width:190.1pt;border:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:28.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/14/99" style="color:#e4002b">Business Sale Package</a></span></strong>
                    </p>
                </td>
            </tr>
            <!--tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Features</span></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:21px;color:#e4002b;">&nbsp;</span></strong></p>
                </td>
            </tr-->
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Printable Brochures</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:40.55pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Manage Your Listing 24/7</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  40.55pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <!--tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:52.9pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">SMS &nbsp;alerts &amp; Enquiry Forwarding</span></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  52.9pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:34.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">Panel of Experts</span></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  34.8pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style="color:black;">X</span></p>
                </td>
            </tr-->
            <tr>
                <td style="width:109.55pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:45.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Extended Customer Support</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.55pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:45.75pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:109.55pt;border:solid windowtext 1.0pt;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;">Price</span></p>
                </td>
                <td style="width:80.55pt;border:solid windowtext 1.0pt;border-left:  none;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/14/99" class="special-link"><span style="color:white;">$99</span></a></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br/>
    <br/>

    <div class="container bg-white p-5" style="overflow-x: scroll;">

        <table class="table1  ">


            <tbody>
            <tr>
                <td colspan="2"
                    style="width:297.25pt;border:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:28.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:21px;color:#e4002b;"><a href="order/15/799"
                                                                               style="color:#e4002b">Photo Sign Package</a></span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
            </tr>
            <!--tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:16px;color:#e4002b;">features</span></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:20.3pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style="font-size:21px;color:#e4002b;">&nbsp;</span></strong></p>
                </td>
            </tr-->
            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Weekly Property Reports</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Unlimited Color Brochures</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span
                            style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>(self printed)</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">Manage your Listing 24/7</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong></p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  15.25pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Add up 33 photos of your property</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
            </tr>

            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">Add up to 33 photos of your user</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  30.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style='font-size:11px;font-family:"Arial","sans-serif";color:#333333;'>X</span></p>
                </td>
            </tr>

            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;border-top:  none;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:52.9pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span style="font-size:16px;color:#e4002b;">1 x large PHOTO SIGN (1800x1200) installed* (or Flatpack)</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:  52.9pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:216.7pt;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;background:#f2f2f2;padding:0cm 1.5pt 0cm 1.5pt;height:50.05pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <strong><span
                                style="font-size:16px;color:#e4002b;">1 x large &apos;SOLD&apos; sticker</span><i
                                class="fa fa-question-circle mx-1" data-toggle="modal" data-target="#exampleModal"
                                onclick="setDetails('')"></i></strong>
                    </p>
                </td>
                <td style="width:80.55pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 1.5pt 0cm 1.5pt;height:50.05pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:black;">X</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:216.7pt;border:solid windowtext 1.0pt;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <span style="color:white;">Price</span></p>
                </td>
                <td style="width:80.55pt;border:solid windowtext 1.0pt;border-left:  none;background:#e4002b;padding:0cm 1.5pt 0cm 1.5pt;height:14.5pt;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'>
                        <a href="order/15/799" class="special-link"><span style="color:white;">$799</span></a></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br/>
    <br/>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feature Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="featureDetails"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setDetails(val) {
            document.getElementById('featureDetails').innerHTML = val
        }
    </script>

@endsection
