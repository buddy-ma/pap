<div>

    <div class="row flex-lg-nowrap">
        <div class="col-12 mb-3">
            <div class="e-panel card">
                <div class="card-header">
                    <h3 class="card-title">Contact Commerciaux List
                    </h3>
                </div>
                <div class="card-body">
                    <div class="e-table">
                        <div class="table-responsive table-lg mt-3">
                            <table class="table card-table table-vcenter text-nowrap border p-0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Repondu</th>
                                        <th>Date Creation</th>
                                        <th>Repondre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($contacts)
                                        @foreach ($contacts as $contact)
                                            <tr class="table-subheader">
                                                <td>{{ $contact->fullname }}</td>
                                                <td>{{ $contact->email ?? '' }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td>
                                                    @if ($contact->answered == 0)
                                                        <span class="badge badge-default mt-2">Non</span>
                                                    @else
                                                        <span class="badge badge-success mt-2">Oui</span>
                                                    @endif
                                                </td>
                                                <td>{{ $contact->created_at }}</td>
                                                <td>
                                                    @if ($contact->answered == 0)
                                                        <a wire:click="repondre({{ $contact->id }})"
                                                            class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
