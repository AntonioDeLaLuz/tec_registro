<?php

namespace App\Http\Controllers\PDF;

use App\Http\Controllers\Controller;
use App\Models\RegisterEvent;
use Barryvdh\DomPDF\Facade\Pdf as PDFFacade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;


class InvitationController extends Controller
{
    //
    public function previewInvitation(Request $request, RegisterEvent $registers_event): Response
    {
        $lider = $request->lider;
        $companion = $request->companion;

        $pdf_file = PDFFacade::loadView(
            'pdf.invitation.template',
            compact(
                'lider',
                'companion'
            )
        )->setPaper('letter');

        // preview
        return $pdf_file->stream("preview_invitation.pdf");
    }

    public function sendInvitation(Request $request): JsonResponse
    {
        $lider = $request->lider;
        $companion = $request->companion;

        $pdf_file = PDFFacade::loadView(
            'pdf.invitation.template',
            compact(
                'lider',
                'companion'
            )
        )->setPaper('letter');

        $path = Storage::path("pdf");
        $file_name = time() . ".pdf";
        $local_path = $path . DIRECTORY_SEPARATOR . $file_name;
        info($local_path);
        $pdf_file->save($local_path);

        // TODO: enviar el correo o pasar este codigo de pdf al controller

        return response()->json([
            "message" => "invitacion enviada."
        ]);
    }
}
