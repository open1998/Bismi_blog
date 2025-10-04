@props([
    'headers' => [],
])

<style>
  @media screen and (max-width: 768px) {
    .responsive-table thead {
      @apply hidden;
    }
    .responsive-table tr {
      @apply block mb-4 border-b-2;
    }
    .responsive-table td {
      @apply block text-right;
    }
    .responsive-table td::before {
      content: attr(data-label);
      @apply float-left font-bold uppercase;
    }
  }
</style>

<div class="overflow-x-auto">
  <div class="min-w-full inline-block align-middle">
    <div class="overflow-hidden border rounded-lg">
      <table class="min-w-full divide-y divide-gray-200 responsive-table">
        <thead class="bg-gray-50">
          <tr>
            @foreach ($headers as $header)
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                {{ $header }}
              </th>
            @endforeach
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          {!! $body !!}
        </tbody>
      </table>
    </div>
  </div>
</div>
