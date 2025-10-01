<!--
  This is a responsive table component.

  To use it in your Laravel Blade templates:
  <x-responsive-table :headers="['Header 1', 'Header 2', 'Header 3']" :rows="[['Data 1.1', 'Data 1.2', 'Data 1.3'], ['Data 2.1', 'Data 2.2', 'Data 2.3']]"/>

  - `:headers` is an array of strings for the table headers.
  - `:rows` is an array of arrays, where each inner array represents a row.
-->

@props([
    'headers' => [],
    'rows' => [],
])

<div class="overflow-x-auto">
  <div class="min-w-full inline-block align-middle">
    <div class="overflow-hidden border rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
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
          @foreach ($rows as $row)
            <tr>
              @foreach ($row as $cell)
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                  {{ $cell }}
                </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
