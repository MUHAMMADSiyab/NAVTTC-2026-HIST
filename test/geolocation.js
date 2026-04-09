// Options — tweak as needed
const options = {
  enableHighAccuracy: true,  // request GPS
  timeout: 10000,            // ms before error fires
  maximumAge: 60000          // accept cached position up to 1 min old
};

// ── One-shot ──────────────────────────────────────────────
navigator.geolocation.getCurrentPosition(onSuccess, onError, options);

// ── Watch mode (e.g. navigation, tracking) ────────────────
const watchId = navigator.geolocation.watchPosition(onSuccess, onError, options);

// Stop watching when done
navigator.geolocation.clearWatch(watchId);

// ── Callbacks ─────────────────────────────────────────────
function onSuccess(pos) {
  const { latitude, longitude, accuracy, altitude, speed, heading } = pos.coords;

  console.log(`Lat: ${latitude.toFixed(6)}`);
  console.log(`Lng: ${longitude.toFixed(6)}`);
  console.log(`Accuracy: ±${Math.round(accuracy)}m`);
  console.log(`Altitude: ${altitude ?? 'N/A'}m`);
  console.log(`Speed: ${speed ?? 'N/A'} m/s`);
  console.log(`Heading: ${heading ?? 'N/A'}°`);
  console.log(`Timestamp: ${new Date(pos.timestamp).toISOString()}`);
}

function onError(err) {
  const messages = {
    1: 'Permission denied by user',
    2: 'Position unavailable (no signal)',
    3: 'Timed out waiting for position'
  };
  console.error(messages[err.code] ?? 'Unknown error', err.message);
}
